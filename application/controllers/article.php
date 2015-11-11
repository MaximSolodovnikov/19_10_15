<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    function __construct() {
        parent::__construct();
        
            $this->load->library('form_validation'); 
            $this->load->model('articles_model');
            $this->load->model('rules_model');
    }
    
    /*View of one article*/
    function view($id) {
        
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->articles_model->get_article($id);
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $data['comments'] = $this->articles_model->get_comments($id);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';
        $name = 'article';
       
        if($this->input->post('add_comment')) {
            
            $this->form_validation->set_rules($this->rules_model->comments_rules);
           
            if($this->form_validation->run()) {
                
                $captcha = $this->input->post('captcha');
                
                if($captcha == $this->session->userdata('captcha')) {
                    
                    $comment_data['author'] = $this->input->post('author');
                    $comment_data['comment'] = $this->input->post('comment_text');
                    $comment_data['avatar'] = $this->input->post('avatar');
                    $comment_data['id'] = $this->input->post('id');
                    $comment_data['date'] = date('Y-m-d');
                    $comment_data['time'] = date('H:i:s');
                    $comment_data['category'] = $this->input->post('category');
                    $this->articles_model->add_comment($comment_data);
                    redirect(base_url() . 'index.php/article/view/' . $id . '#c');
                }
                else {
                    $data['error'] = "Символы с картинки введены не верно";
                    $data['captcha'] = $this->captcha->get_captcha();
                    $this->template->get_view($data, $name);
                }
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