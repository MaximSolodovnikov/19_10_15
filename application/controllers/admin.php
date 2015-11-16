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
                
                $this->load->view('admin/login_view', $data);
            }
        }
        else {
            
            $name = 'main';
            $this->template->admin_view($name, $data);
        }
    }
}