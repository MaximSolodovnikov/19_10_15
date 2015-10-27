<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
    
    function get_view($data, $name) {
        
        $CI =& get_instance();
        
        $CI->load->view('blocks/pre_header_view', $data);
        
        if(empty($data['user'])) {
            
            $CI->load->view('blocks/header_view', $data);
        }
        else {
            
            $CI->load->view('blocks/cabinet_view', $data);
        }
        
        $CI->load->view('blocks/menu_view', $data);
        $CI->load->view('blocks/search_view');
        $CI->load->view('blocks/slider_view');
        $CI->load->view($name . '_view', $data);
        $CI->load->view('blocks/right_block_view', $data);
        $CI->load->view('blocks/pagination_view');
        $CI->load->view('blocks/footer_view');
    }
}
