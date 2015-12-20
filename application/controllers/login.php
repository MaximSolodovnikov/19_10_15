<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
            $this->load->model('login_model');
            $this->load->model('articles_model'); 
            $this->load->helper('string');
    }
    
    function index() {
        
        $data['page_info'] = $this->login_model->get_info('login'); 
        $name = 'info_login';
        $data['error'] = '';
        
        if($this->input->post('enter') && $this->input->post('username') && $this->input->post('pswd')) {
            
            $username = $this->input->post('username');
            $password = $this->input->post('pswd');
            
            $autorization = $this->login_model->check_data_for_authorization($username, $password = sha1(md5($password)));
            
            if($autorization) {
                
                $data['user_info'] = $this->login_model->user_info($username);
                $ses_data = array(
                    'id' => $data['user_info']['id'], /* tempjrary */
                    'user' => $username,
                    'avatar' => $data['user_info']['avatar']
                );
                
                $this->session->set_userdata($ses_data);
                redirect(base_url());
            }
            else $data['error'] = 'Вы ввели неправильный логин или пароль';
        }
        else 
            $data['error'] = 'Неверные данные для авторизации';
            $this->template->get_view($data, $name);
    }
    
    function register() {
        
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->login_model->get_info('register');
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $data['error'] = '';
        $name = 'register';
        
        if($this->input->post('register')) {
            
            $this->form_validation->set_rules($this->rules_model->reg_rules);
            
            if($this->form_validation->run()) {
                
                $username = $this->input->post('username');
                $password = $this->input->post('pswd');
                $password2 = $this->input->post('pswd2');
                $email = $this->input->post('email');
                $captcha = $this->input->post('captcha');
                $check_login = $this->login_model->check_login($username);
                
                if(! $check_login) {
                    
                    $info_msg = "Этот логин занят. Пожалуйста, выберете себе другой.";
                }
                
                if($password != $password2) {
                    
                    $info_msg = "Пароли не совпадают";
                }
                
                if($captcha != $this->session->userdata('captcha')) {
                    
                    $info_msg = "Символы с картинки не совпадают";
                }

                if($check_login && $password == $password2 && $captcha == $this->session->userdata('captcha')) {
                    
                    $new['username'] = $username;
                    $new['password'] = sha1(md5($password));
                    $new['email'] = $email;
                    
                    /*-----------------For avatar upload--------------------------------*/

                    $config['upload_path'] = './images/avatars/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '1000';
                    $config['encrypt_name']  = TRUE;
                    $config['remove_spaces']  = TRUE;
		
                    $this->load->library('upload', $config);
                    
                    if( ! $this->upload->do_upload('avatar'))
                        {
                            $new['avatar'] = 'avatar.png';
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $new['avatar'] = $upload_data['file_name'];

                            $config['source_image']	= $upload_data['full_path']; 
                            $config['new_image'] = APPPATH . '../images/avatars/thumbs';
                            $config['maintain_ratio'] = TRUE; 
                            $config['width']	= 46; 
                            $config['height']	= 46;

                            $this->load->library('image_lib', $config);

                            $this->image_lib->resize();
                        }
                        
                    /*-------------------------------------------------*/
                    
                    $this->login_model->register_user($new);
                    redirect(base_url());    
                }
                    $data['error'] = $info_msg;
                    $data['captcha'] = $this->captcha->get_captcha();
                    $this->template->get_view($data, $name);
            }
            else {
                
                $data['captcha'] = $this->captcha->get_captcha();
                $this->template->get_view($data, $name);
            }
        }
        else {
            
            $data['captcha'] = $this->captcha->get_captcha();
            $this->template->get_view($data, $name);
        }
    }
    
    function logout() {
        
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('avatar');
        redirect(base_url());
    }
    
    function forgot_pswd() {
        
        $data['page_info'] = $this->login_model->get_info('forgot_pswd'); 
        $data['error'] = '';

        if($this->input->post('send_pswd')) {

            $this->form_validation->set_rules($this->rules_model->forgot_pswd_rules);

            if($this->form_validation->run()) {
                
                $login = $this->input->post('login');
                $email = $this->input->post('email');
                
                if($this->login_model->check_forgot_pswd($login, $email)) {
                    
                    $new_pswd['password'] = random_string('numeric', 4);
                    mail($email, "Мой сад и огород - Восстановление пароля", $new_pswd['password']);
                    $new_pswd['password'] = sha1(md5($new_pswd['password']));
                    $this->login_model->update_pswd($login, $new_pswd);
                    $data['error'] = "Пароль был успешно изменен. Проверте свой email";
                    $name = 'forgot_pswd';
                    $this->template->get_view($data, $name);
                }
                else {
                    
                    $data['error'] = "Такой комбинации login и email не найдено.";
                    $name = 'forgot_pswd';
                    $this->template->get_view($data, $name);
                }
            }
            else {
                
                $name = 'forgot_pswd';
                $this->template->get_view($data, $name);
            }
        }
        else {
            
            $name = 'forgot_pswd';
            $this->template->get_view($data, $name);
        }
    }
}