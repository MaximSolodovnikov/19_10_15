<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    /*Получение данных из таблицы tech_sections*/
    function get_info($title) {
        
        $this->db->where('title_url', $title);
        $query = $this->db->get('tech_section');
        return $query->row_array();
    }
}