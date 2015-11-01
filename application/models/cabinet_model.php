<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabinet_model extends CI_Model {
    
    function old_pswd_check($user) {
        
        $this->db->where('username', $user);
        $query = $this->db->get('users');
        return $query->row_array();
    }
    
    function change_pswd($user, $pswd) {
        
        $this->db->where('username', $user);
        $this->db->update('users', $pswd);
    }
    
    function old_email_check($user, $email) {
        
        $this->db->where('username', $user);
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        
        if($query->num_rows() > 0) {
            
            return TRUE;
        }
        else {
            
            return FALSE;
        }
    }
    
    function change_email($user, $email) {
        
        $this->db->where('username', $user);
        $this->db->update('users', $email);
    }
    
    function change_avatar($user, $avatar) {
        
        $this->db->where('username', $user);
        $this->db->update('users', $avatar);
    }
}
        
        