<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    /*Получение данных из таблицы tech_sections*/
    function get_info($title) {
        
        $this->db->where('title_url', $title);
        $query = $this->db->get('tech_section');
        return $query->row_array();
    }
    
    /*Проверка логина на занятость, при регистрации*/
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
    
    /*Проверка логина и пароля при авторизации*/
    function check_data_for_authorization($user, $pswd) {
        
        $this->db->where('username', $user);
        $this->db->where('password', $pswd);
        $this->db->select('username');
        $query = $this->db->get('users');
        
        if($query->num_rows() > 0) {
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