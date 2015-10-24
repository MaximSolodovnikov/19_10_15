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

                ),
            array
                (
                    'field' => 'captcha',
                    'label' => 'Символы с картинки',
                    'rules' => 'required'
                )
        );
    /*Правила при регистрации нового пользователя*/
    public $reg_rules = array
        (
            array
                (
                    'field' => 'username',
                    'label' => 'Логин',
                    'rules' => 'required|min_length[5]|max_length[20]'
                ),
        
           array
                (
                    'field' => 'pswd',
                    'label' => 'Пароль',
                    'rules' => 'required'

                ),
            array
                (
                    'field' => 'pswd2',
                    'label' => 'Пароль еще раз',
                    'rules' => 'required'

                ),
            array
                (
                    'field' => 'captcha',
                    'label' => 'Символы с картинки',
                    'rules' => 'required'
                )
        );   
}