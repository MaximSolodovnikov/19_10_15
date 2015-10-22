<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    function index() {
        
		redirect(base_url());
    } 
	
	function page($title) {
		
		$this->load->model('pages_model');
		$data['menu'] = $this->pages_model->get_menu();
		$data['page_info'] = $this->pages_model->get_page_info($title);
		/*$name = "home";*/
        $this->template->get_view($data);
	}
}

