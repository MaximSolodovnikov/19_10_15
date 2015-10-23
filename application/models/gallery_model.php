<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {
	
    function get_gallery() {

        $query = $this->db->get('gallery');
        return $query->result_array();
    }
}