<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_model extends CI_Model {
	
    public $comments_rules = array
        (
            array
                (
                    'field' => 'author',
                    'label' => 'Автор',
                    'rules' => 'required|min_length[2]|max_length[20]'
                ),
        
           array
                (
                    'field' => 'comment_text',
                    'label' => 'для комментариев',
                    'rules' => 'required'

                )
        );   
}