<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {
	
    function get_all_articles($num, $offset) {

        $query = $this->db->get('articles', $num, $offset);
        return $query->result_array();
    }
    
    /*Output of articles by category*/
    function get_cat_articles($cat) {
        
        $this->db->where('category', $cat);
        $query = $this->db->get('articles');
        return $query->result_array();
    }
    
    /*Output of one article*/
    function get_article($id) {
        
        $this->db->where('id', $id);
        $query = $this->db->get('articles');
        return $query->row_array();
    }
    
    /*Adding of comments*/
    function add_comment($add) {
        
        $this->db->insert('comments', $add);
    }
    
    /*Output of comments*/
    function get_comments($id) {
        
        $this->db->order_by('id', 'desc');
        $this->db->where('id', $id);
        $query = $this->db->get('comments');
        return $query->result_array();
    }
}