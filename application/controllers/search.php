<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('search_model');
        $this->load->model('gallery_model');
        $this->load->model('login_model');
    }
            
    function index() {
        
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->login_model->get_info('search'); 
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $data['user'] = $this->session->userdata('user');
        /*$data['user_info']['status'] = $this->session->userdata('status');*/
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';
        $data['search'] = $this->search_model->get_search();
        $name = 'info_search';
        $this->template->get_view($data, $name);
    }
}