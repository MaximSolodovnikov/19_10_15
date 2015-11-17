<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    /*Checking admin to login*/
    function check_admin_for_authorization($user, $pswd) {
        
        $this->db->where('username', $user);
        $this->db->where('password', $pswd);
        $query = $this->db->get('users');
        
        if($query->num_rows() > 0 ) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    
    /*info about user*/
    function user_info($user) {
        
        $this->db->where('username', $user);
        $query = $this->db->get('users');
        return $query->row_array();
    }
    
    function add_info($page, $add) {
        
        $this->db->insert($page, $add);
    }
    
    /*Output of categories when adding article in tag select */
    function get_cat() {
        
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    
    function get_editlist($page) {
        
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($page);
        return $query->result_array();
    }
    
    function get_info_data($page, $id) {
        
        $this->db->where('id', $id);
        $query = $this->db->get($page);
        return $query->row_array();
    }
}
