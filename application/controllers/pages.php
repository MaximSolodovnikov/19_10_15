<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    function index() {
        
        $this->template->get_view();
    } 
}
