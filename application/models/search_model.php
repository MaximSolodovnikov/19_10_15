<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class search_model extends CI_Model {
    
   /* function get_search_result($title) {
        
        $this->db->like('title', $title, 'both');
        $query = $this->db->get('articles');
        
        if($query->num_rows() > 0) {
           $output = '<ul>';
            foreach($query->result() as $item) {
                $output .= '<li>' . $item->title . '</li>';
            }
             $output = '</ul>';
             return $output;
        }
        else {
            return '<p>По Вашему запросу ничего не найдено</p>';
        }
    }*/
    
    function get_search() {
        
        $input = $this->input->post('search');
        $this->db->like('title', $input);
        $query = $this->db->get('articles');
        return $query->result();
        }
}