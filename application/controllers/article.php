<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    /*Просмотр конкретной статьи*/
    function view($title) {
        
        $this->load->library('pagination');
        $this->load->model('articles_model');
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->articles_model->get_article($title);
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $name = 'article';
        $this->template->get_view($data, $name);
    }
}