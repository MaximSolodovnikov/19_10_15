<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {
	
    function get_all_articles($num, $offset) {

        $query = $this->db->get('articles', $num, $offset);
        return $query->result_array();
    }
    
    /*Выбор статей по категориям*/
    function get_cat_articles($cat) {
        
        $this->db->where('category', $cat);
        $query = $this->db->get('articles');
        return $query->result_array();
    }
    
    /*Вывод конкретной статьи*/
    function get_article($title) {
        
        $this->db->where('title_url', $title);
        $query = $this->db->get('articles');
        return $query->row_array();
    }
}