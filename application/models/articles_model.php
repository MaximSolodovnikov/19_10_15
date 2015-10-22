<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {
	
	function get_all_articles() {
		
		$query = $this->db->get('articles');
		return $query->result_array();
	}
}