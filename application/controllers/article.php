<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    function __construct() {
        parent::__construct();
        
            $this->load->model('articles_model');
    }
    
    /*View of one article*/
    function view($title) {
        
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->articles_model->get_article($title);
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $data['comments'] = $this->articles_model->get_comments($title);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['id'] = $this->session->userdata('id');
		
        $data['error'] = '';
        
        if(empty($data['page_info'])) {
            
            redirect(base_url());
        }
        $name = 'article';
       
        if($this->input->post('add_comment')) {
            
            $this->form_validation->set_rules($this->rules_model->comments_rules);
           
            if($this->form_validation->run()) {
                
                $captcha = $this->input->post('captcha');
                
                if($captcha == $this->session->userdata('captcha')) {

                    $comment_data['username_id'] = $this->input->post('username_id');
                    $comment_data['comment'] = $this->input->post('comment_text');
                    $comment_data['date'] = date('Y-m-d');
                    $comment_data['time'] = date('H:i:s');
                    $comment_data['article_id'] = $this->input->post('article_id');

                    $this->articles_model->add_comment($comment_data);
                    redirect(base_url() . 'index.php/article/view/' . $title . '#c');
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