<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	
	function index() {
		
            /*$this->load->model('articles_model');*/
            $this->load->model('gallery_model');
            $data['menu'] = $this->pages_model->get_menu();
            $data['page_info'] = $this->pages_model->get_page_info('gallery');
            $data['categories'] = $this->pages_model->get_cat();
            /*$data['articles'] = $this->articles_model->get_all_articles();*/
       
            $name = 'gallery';
            $this->template->get_view($data, $name);
	}
}

