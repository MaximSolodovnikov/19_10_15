<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    /*Get page title from tech_sections*/
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
    
    /*Registration of new user*/
    function register_user($new) {
        
        $this->db->insert('users', $new);
    }
    
    /*Checking username and password to login*/
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
    
    /*Проверка логина и email при восстановлении пароля*/
    function check_forgot_pswd($login, $email) {
        
        $this->db->where('username', $login);
        $this->db->where('email', $email);
        $this->db->select('username');
        $query = $this->db->get('users');
        
        if($query->num_rows() > 0) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    
    function update_pswd($login, $new_pswd) {
        
        $this->db->where('username', $login);
        $this->db->update('users', $new_pswd);
    }
}