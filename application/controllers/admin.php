<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function index() {
    
        $name = 'main';
        $this->template->admin_view($name);
    }
}