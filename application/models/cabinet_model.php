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
}
        
        