<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function register() {
        
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('login_model');
        $this->load->model('articles_model');
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->login_model->get_info('register'); /*Получение данных об странице из таблицы tech_section*/
        /*$data['categories'] = $this->pages_model->get_cat();*/
        /*$data['latest_articles'] = $this->pages_model->get_last_articles();*/
        $name = 'register';
        
        if($this->input->post('register')) {
            
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->reg_rules);
            $check = $this->form_validation->run();
            
            if($check) {
                
                
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