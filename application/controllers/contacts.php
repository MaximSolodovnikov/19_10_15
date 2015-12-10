<?php defined('BASEPATH') OR exit('No direct script access allowed');

class contacts extends CI_Controller {

    function index() {
        
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('contacts');
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_last_articles();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $name = 'contacts';
        $this->template->get_view($data, $name);
    }
}