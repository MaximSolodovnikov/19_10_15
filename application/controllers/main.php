<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
    function index() {

        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('home');
        $data['categories'] = $this->pages_model->get_cat();
        $name = 'home';
        $this->template->get_view($data, $name);   
    }
}