<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {
	
    function get_menu() {

        $query = $this->db->get('menu');
        return $query->result_array();
    }

    function get_page_info($title) {

        $this->db->where('title_url', $title);
        $query = $this->db->get('menu');
        return $query->row_array();
    }

    function get_cat() {

        $this->db->order_by('id', 'desc');
        $this->db->limit('12');
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    
     /*Вывод последних 3 статей*/
    function get_last_articles() {
        
        $this->db->order_by('id', 'desc');
        $this->db->limit('3');
        $query = $this->db->get('articles');
        return $query->result_array();
    }
}