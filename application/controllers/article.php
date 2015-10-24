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
        
        $this->load->library('form_validation'); 
        $this->load->library('pagination');
        $this->load->model('articles_model');
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->articles_model->get_article($title);
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $name = 'article';
       
        if($this->input->post('add_comment')) {
            
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->comments_rules);
            $check = $this->form_validation->run();
            
            if($check) {
                
                $comment_data['author'] = $this->input->post('author');
                $comment_data['comment'] = $this->input->post('comment_text');
                $comment_data['avatar'] = $this->input->post('avatar');
                $comment_data['note_id'] = $this->input->post('note_id');
                $comment_data['date'] = date('Y-m-d');
                $comment_data['time'] = date('H:i');
                $comment_data['category'] = $this->input->post('category');
                
                $this->articles_model->add_comment($comment_data);
                redirect(base_url() . 'index.php/article/view/' . $title);
            }
            else {
                
                $this->template->get_view($data, $name);
            }
        }
        else {
            
             $this->template->get_view($data, $name);
        }
    }
}