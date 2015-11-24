<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function index() {

        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['info'] = '';

        if($data['user'] != 'admin') {
            
            if($this->input->post('enter')) {
                
                $login = $this->input->post('username');
                $pswd = $this->input->post('pswd');
                $pswd = sha1(md5($pswd));
                
                if($this->admin_model->check_admin_for_authorization($login, $pswd)) {
                    
                    $data['user_info'] = $this->admin_model->user_info($login);
                    $ses_data = array(
                        
                        'user' => $login,
                        'status' => $data['user_info']['status'],
                        'avatar' => $data['user_info']['avatar']
                    );
                    
                    $this->session->set_userdata($ses_data);
                    redirect(base_url() . 'index.php/admin');
                }
                else {
                    
                    $data['info'] = "Неверные данные.";
                    $this->load->view('admin/login_view', $data);
                }
            }
            else {
                
                $data['info'] = "У Вас нет прав доступа.";
                $this->load->view('admin/login_view', $data);
            }
        }
        else {
            
            $data['stat'] = array(
                'articles' => $this->db->count_all_results('articles'),
                'users' => $this->db->count_all_results('users'),
                'comments' => $this->db->count_all_results('comments')
            );
            
            $name = 'main';
            $this->template->admin_view($name, $data);
        }
    }
    
    /*$page - parameter that we want to add (article, category or page)*/
    function add($page) {
        
        $data['user'] = $this->session->userdata('user');
        $data['categories'] = $this->admin_model->get_cat();
        $data['info'] = '';
        if($data['user'] == 'admin') {
            
            $this->form_validation->set_rules($this->rules_model->$page);
            if($this->form_validation->run() && $this->input->post('add')) {
                
                if($page == 'articles') {
                    
                    $config['upload_path'] = './images/articles/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '1000';
                    $config['encrypt_name']  = TRUE;
                    $config['remove_spaces']  = TRUE;
		
                    $this->load->library('upload', $config);
                    
                    if( ! $this->upload->do_upload('userfile')) {
                            
                            $add['img'] = 'default_article.png';
                    }
                    else {
                            
                        $upload_data = $this->upload->data();
                        $add['img'] = $upload_data['file_name'];

                        $config['source_image']	= $upload_data['full_path']; 
                        $config['new_image'] = APPPATH . '../images/articles/thumbs';
                        $config['maintain_ratio'] = TRUE; 
                        $config['width']	= 48; 
                        $config['height']	= 48;

                        $this->load->library('image_lib', $config);

                        $this->image_lib->resize();
                    }
                }
                $add['id'] = $this->input->post('id');
                $add['title'] = $this->input->post('title');
                $add['title_url'] = $this->input->post('title_url');
                $add['date'] = $this->input->post('date');
                $add['text'] = $this->input->post('text');
                $add['keywords'] = $this->input->post('keywords');
                $add['category'] = $this->input->post('category');
                
                /*Deleting of empty elements of array for adding category to database*/
                foreach($add as $key => $val) {
                    
                    if( ! $add[$key]) {
                        unset($add[$key]);
                    }
                }
                /*-------------------------------------------------------------*/
                $this->admin_model->add_info($page, $add);
                redirect(base_url() . 'index.php/admin');
            }
            else {
                
                $name = 'add/' . $page;
                $this->template->admin_view($name, $data);
            }
        }
        else {
            
            redirect(base_url() . 'index.php/admin');
        }
    }
    
    function editlist($page) {
        
        $data['user'] = $this->session->userdata('user');
        $data['categories'] = $this->admin_model->get_cat();
        $data['info'] = '';
        if($data['user'] == 'admin') {
            
            $data['page'] = $page; /*need in link for output of article or category in editlist_view*/
            $data['edit'] = $this->admin_model->get_editlist($page);
            
            /*Output of titles (Edit list of article(category) in header of editlist_view.*/
            
            if($page == 'articles') {
                $data['info'] = 'статей';
            }
            if($page == 'categories') {
                $data['info'] = 'категорий';
            }
            /*------------------------------------*/
            $name = 'edit/editlist';
            
            $this->template->admin_view($name, $data);
        }
        else {
            
            redirect(base_url() . 'index.php/admin');
        }
    }
    
    function edit($page, $id) {
        
        $data['user'] = $this->session->userdata('user');
        $data['categories'] = $this->admin_model->get_cat();
        $data['info_about_data'] = $this->admin_model->get_info_data($page, $id);
        $data['info'] = '';
        if($data['user'] == 'admin') {
            
            $this->form_validation->set_rules($this->rules_model->$page);
            if($this->form_validation->run() && $this->input->post('edit')) {
                
                $edit['id'] = $this->input->post('id');
                $edit['title'] = $this->input->post('title');
                $edit['title_url'] = $this->input->post('title_url');
                $edit['date'] = $this->input->post('date');
                $edit['text'] = $this->input->post('text');
                $edit['keywords'] = $this->input->post('keywords');
                $edit['category'] = $this->input->post('category');
                
                $edit['username'] = $this->input->post('username');
                $edit['password'] = $this->input->post('password');
                $edit['email'] = $this->input->post('email');
                $edit['avatar'] = $this->input->post('avatar');
                
                /*Deleting of empty elements of array for adding category to database*/
                foreach($edit as $key => $val) {
                    
                    if( ! $edit[$key]) {
                        unset($edit[$key]);
                    }
                }
                /*-------------------------------------------------------------*/
                $this->admin_model->edit_info($page, $id, $edit);
                redirect(base_url() . 'index.php/admin');
            }
            else {
                
                $name = 'edit/' . $page;
                $this->template->admin_view($name, $data);
            }
        }
        else {
            
            redirect(base_url() . 'index.php/admin');
        }
    }
    
    function userlist() {
        
        $data['user'] = $this->session->userdata('user');
        $data['categories'] = $this->admin_model->get_cat();
        $data['info'] = '';
        if($data['user'] == 'admin') {
            
            $data['user_info'] = $this->admin_model->get_userlist();
            
            $name = 'edit/userlist';
            
            $this->template->admin_view($name, $data);
        }
        else {
            
            redirect(base_url() . 'index.php/admin');
        }
    }
    
    function del($page) {
        
        $data['user'] = $this->session->userdata('user');
        $data['categories'] = $this->admin_model->get_cat();
        $data['info'] = '';
        if($data['user'] == 'admin') {
            
            $data['edit'] = $this->admin_model->get_editlist($page);
            if($this->input->post('del')) {

                $id = $this->input->post('id');
                $this->admin_model->del_info($page, $id);
                redirect(base_url() . 'index.php/admin');
            }
            else {
                
                if($page == 'comments') $name = 'del/comments';
                else $name = 'del/dellist';
                
                /*Output of titles (Edit list of article(category) in header of editlist_view.*/
            
                if($page == 'articles') {
                    $data['info'] = 'статей';
                }
                if($page == 'categories') {
                    $data['info'] = 'категорий';
                }
                /*------------------------------------*/
                
                $this->template->admin_view($name, $data);
            }
        }
        else {
            
            redirect(base_url() . 'index.php/admin');
        }
    }
}