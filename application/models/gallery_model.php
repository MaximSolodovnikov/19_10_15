<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery_model extends CI_Model {
	
    function get_gallery() {

        $query = $this->db->get('gallery');
        return $query->result_array();
    }
    
        function get_all_images($num, $offset) {

        $query = $this->db->get('gallery', $num, $offset);
        return $query->result_array();
    }
}