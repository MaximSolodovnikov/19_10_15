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
    
    /*Информация о user, принимаем параметр login*/
    function user_info($user) {
        
        $this->db->where('username', $user);
        $query = $this->db->get('users');
        return $query->row_array();
    }
}
