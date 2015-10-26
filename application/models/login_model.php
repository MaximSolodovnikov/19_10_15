<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    /*Получение данных из таблицы tech_sections*/
    function get_info($title) {
        
        $this->db->where('title_url', $title);
        $query = $this->db->get('tech_section');
        return $query->row_array();
    }
    
    /*Проверка логина на занятость*/
    function check_login($username) {
        
        $this->db->where('username', $username);
        $this->db->select('username');
        $query = $this->db->get('users');
        
        if($query->num_rows() > 0) {
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    
    /*Регистрация нового пользователя*/
    function register_user($new) {
        
        $this->db->insert('users', $new);
    }
}