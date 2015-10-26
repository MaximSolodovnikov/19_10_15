<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function register() {
        
        /*$this->load->library('pagination');*/
        $this->load->model('articles_model');        
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->login_model->get_info('register'); /*Получение данных об странице из таблицы tech_section*/
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $data['error'] = '';
        $name = 'register';
        
        if($this->input->post('register')) {
            
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->reg_rules);
            $check = $this->form_validation->run();
            
            if($check) {
                
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
}