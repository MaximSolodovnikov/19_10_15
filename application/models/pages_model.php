<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {
	
	function get_menu() {
		
		$query = $this->db->get('menu');
		return $query->result_array();
	}
	
	function get_page_info($title) {
		
		$this->db->where('title_url', $title);
		$query = $this->db->get('menu');
		return $query->row_array();
	}
	
	function get_cat() {
		
		$query = $this->db->get('categories');
		return $query->result_array();
	}
}