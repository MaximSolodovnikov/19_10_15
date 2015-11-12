<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function index() {
    
        define('ADMIN_STATUS', 1);
        
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        
        
        if(empty($data['user']) || $data['user_info']['status'] != 1) {
            
            $this->load->view('admin/login_admin');
        }
        else {
            
            $name = 'main';
            $this->template->admin_view($name);
        }
    }
}