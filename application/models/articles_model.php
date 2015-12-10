<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class articles_model extends CI_Model {
	
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
    
    /*Check for article*/
    function check_for_article($cat) {
        
        $this->db->where('category', $cat);
        $query = $this->db->get('articles');
        if($query->num_rows() > 0) {
            
            return TRUE;
        }
        else {
            
            return FALSE;
        }
    }
    
    /*Output of one article*/
    function get_article($title) {
        
        $this->db->where('title_url', $title);
        $query = $this->db->get('articles');
        return $query->row_array();
    }
    
    /*Adding of comments*/
    function add_comment($add) {
        
        $this->db->insert('comments', $add);
    }
    

    /*Output of comments*/
    function get_comments($article_id) {
        
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->join('user', 'comments.author_id = users.id');
        $this->db->where('comments.article_id', $article_id);

        $query = $this->db->get();
        return $query->result_array();
    }

}