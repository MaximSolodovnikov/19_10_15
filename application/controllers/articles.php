<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('articles_model');
    }
	
    function index() {

        $config['base_url'] = base_url() . 'index.php/articles/index';
        $config['total_rows'] = $this->db->count_all('articles');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        
        $config['per_page'] = '5';
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        
        $this->pagination->initialize($config); 
        
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('articles');
        $data['categories'] = $this->pages_model->get_cat();
        $data['articles'] = $this->articles_model->get_all_articles($config['per_page'], $this->uri->segment(3));
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $name = 'articles';
        $this->template->get_view($data, $name);
    }

    /*Output of articles by categories*/
    function cat($cat) {

        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('articles');
        $data['categories'] = $this->pages_model->get_cat();
        $data['articles'] = $this->articles_model->get_cat_articles($cat);
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');

        if( ! $this->articles_model->check_for_article($cat)) {
            
            $name = 'no_articles';
            $this->template->get_view($data, $name);
        }
        else {
            
            $name = 'articles';
            $this->template->get_view($data, $name);
        }

    }
}