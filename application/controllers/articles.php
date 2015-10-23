<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	
    function index() {

        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/articles/index';
        $config['total_rows'] = $this->db->count_all('articles');
        $config['per_page'] = '2';

        $this->pagination->initialize($config); 
        
        $this->load->model('articles_model');
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('articles');
        $data['categories'] = $this->pages_model->get_cat();
        $data['articles'] = $this->articles_model->get_all_articles($config['per_page'], $this->uri->segment(3));
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $name = 'articles';
        $this->template->get_view($data, $name);
    }

    /*Выбор статьи по категориям (по месяцам)*/

    function cat($cat) {

        $this->load->model('articles_model');
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('articles');
        $data['categories'] = $this->pages_model->get_cat();
        $data['articles'] = $this->articles_model->get_cat_articles($cat);
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $name = 'articles';
        $this->template->get_view($data, $name);
    }
}