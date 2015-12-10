<?php defined('BASEPATH') OR exit('No direct script access allowed');

class cabinet extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
            $this->load->model('login_model');
            $this->load->model('cabinet_model');
    }
    
    function index() {
        
        $data['page_info'] = $this->login_model->get_info('cabinet'); 
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $name = 'info_cabinet';
        $data['error'] = '';
        $this->template->get_view($data, $name);
    }
    
    function password() {
        
        $data['page_info'] = $this->login_model->get_info('password'); 
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';
        
        if( ! empty($data['user'])) {
            
            $this->form_validation->set_rules($this->rules_model->change_pswd_rules);
            
            if($this->form_validation->run() && $this->input->post('change_pswd')) {
                
                $old_pswd = $this->input->post('old_pswd');
                $old_pswd = sha1(md5($old_pswd));
                $new_password = $this->input->post('new_pswd');
                $new_password2 = $this->input->post('new_pswd2');
                
                $check_old_pswd = $this->cabinet_model->old_pswd_check($data['user']);
                
                if($check_old_pswd['password'] != $old_pswd) {
                    
                    $info_msg = "Старый пароль не верен";
                }
                
                if($new_password != $new_password2) {
                    
                    $info_msg = "Пароли не совпадают";
                }
                
                if($check_old_pswd['password'] == $old_pswd && $new_password == $new_password2) {
                    
                    $new_pswd = sha1(md5($new_password));
                    $change['password'] = $new_pswd;
                    
                    $this->cabinet_model->change_pswd($data['user'], $change);
                    $info_msg = "Пароль успешно изменен";
                    $data['error'] = $info_msg;
                    $name = 'info_cabinet';
                    $this->template->get_view($data, $name);
                }
                else {
                    
                    $data['error'] = $info_msg;
                    $name = 'pswd';
                    $this->template->get_view($data, $name);
                }
            }
            else {
                
                $name = 'pswd';
                $this->template->get_view($data, $name);
            }
        }
        else {
            
            $data['error'] = 'Для этой операции Вам необходимо авторизироваться';
            $name = 'info_cabinet';
            $this->template->get_view($data, $name);
        }
    }
    
    function email() {
        
        $data['page_info'] = $this->login_model->get_info('email'); 
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';
        
        if( ! empty($data['user'])) {
            
            $this->form_validation->set_rules($this->rules_model->change_email_rules);
            
            if($this->form_validation->run() && $this->input->post('change_email')) {
                
                $old_email = $this->input->post('old_email');
                $check_old_email = $this->cabinet_model->old_email_check($data['user'], $old_email);
                
                if( ! $check_old_email) {
                    
                    $data['error'] = "Старый (email) не верен";
                    $name = 'email';
                    $this->template->get_view($data, $name);
                }
                else {
                    
                    $change['email'] = $this->input->post('new_email');
                    $this->cabinet_model->change_email($data['user'], $change);
                    $data['error'] = "email успешно изменен";
                    $name = 'info_cabinet';
                    $this->template->get_view($data, $name);
                }
            }
            else {
                
                $name = 'email';
                $this->template->get_view($data, $name);
            }
        }
        else {
            
            $data['error'] = 'Для этой операции Вам необходимо авторизироваться';
            $name = 'info_cabinet';
            $this->template->get_view($data, $name);
        }
    }
    
    function avatar() {
        
        $data['page_info'] = $this->login_model->get_info('avatar'); 
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';
        
        if( ! empty($data['user'])) {
            
            if($this->input->post('change_avatar')) {
                
                $config['upload_path'] = './images/avatars/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['encrypt_name']  = TRUE;
		$config['remove_spaces']  = TRUE;
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('avatar'))
		{
			$data['error'] = $this->upload->display_errors();
			$name = 'avatar';
                        $this->template->get_view($data, $name);
		}	
		else
		{
                    $upload_data = $this->upload->data();
                    $avatar['avatar'] = $upload_data['file_name'];
                    $this->cabinet_model->change_avatar($data['user'], $avatar);
                    $data['user_info'] = $this->login_model->user_info($data['user']);
                    
                    $ses_data = array(
                        'avatar' => $data['user_info']['avatar']
                    );
                    
                    $this->session->set_userdata($ses_data);
                    
                    $config['source_image']	= $upload_data['full_path']; 
                    $config['new_image'] = APPPATH . '../images/avatars/thumbs';
                    $config['maintain_ratio'] = TRUE; 
                    $config['width']	= 48; 
                    $config['height']	= 48;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();

                    $data['error'] = "Аватар успешно изменен";    
                    $name = 'info_cabinet';
                    $this->template->get_view($data, $name);
		}
            }
            else {
                
            $name = 'avatar';
            $this->template->get_view($data, $name);
            }
        }
        else 
        {
            $data['error'] = 'Для этой операции Вам необходимо авторизироваться';
            $name = 'info_cabinet';
            $this->template->get_view($data, $name);
        }
    }
}