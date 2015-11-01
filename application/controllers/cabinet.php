<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Cabinet extends CI_Controller {
    
    function index() {
        
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $data['page_info'] = $this->login_model->get_info('cabinet'); 
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $name = 'info_cabinet';
        $data['error'] = '';
        $this->template->get_view($data, $name);
    }
    
    function password() {
        
        $this->load->model('login_model');
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $data['page_info'] = $this->login_model->get_info('password'); 
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        
        $data['error'] = '';
        
        if( ! empty($data['user'])) {
            
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->change_pswd_rules);
            $check = $this->form_validation->run();
            
            if($check && $this->input->post('change_pswd')) {
                
                $this->load->model('cabinet_model');
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
            $name = 'pswd';
            $this->template->get_view($data, $name);
        }
    }
    
    function email() {
        
        $this->load->model('login_model');
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $data['page_info'] = $this->login_model->get_info('email'); 
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';
        
        if( ! empty($data['user'])) {
            
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->change_email_rules);
            $check = $this->form_validation->run();
            
            if($check && $this->input->post('change_email')) {
                
                $this->load->model('cabinet_model');
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
            $name = 'email';
            $this->template->get_view($data, $name);
        }
    }
}