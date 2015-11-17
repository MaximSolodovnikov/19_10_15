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
}