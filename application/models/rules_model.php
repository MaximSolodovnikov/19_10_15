<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_model extends CI_Model {
	
    public $comments_rules = array
        (
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
    /*Rules for registration of new user*/
    public $reg_rules = array
        (
            array
                (
                    'field' => 'username',
                    'label' => 'Логин',
                    'rules' => 'required|min_length[3]|max_length[20]'
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
                    'label' => 'Пароль повторно',
                    'rules' => 'required'

                ),
            array
                (
                    'field' => 'email',
                    'label' => 'Эл.почта',
                    'rules' => 'required|valid_email'

                ),
            array
                (
                    'field' => 'captcha',
                    'label' => 'Символы с картинки',
                    'rules' => 'required'
                )
        );
    /*Rules for changing of password*/
    public $change_pswd_rules = array
        (
            array
                (
                    'field' => 'old_pswd',
                    'label' => 'Старый пароль',
                    'rules' => 'required|min_length[3]|max_length[20]'
                ),
        
           array
                (
                    'field' => 'new_pswd',
                    'label' => 'Новый пароль',
                    'rules' => 'required'

                ),
            array
                (
                    'field' => 'new_pswd2',
                    'label' => 'Пароль повторно',
                    'rules' => 'required'

                )
        );   
    
    /*Rules for changing of email*/
    public $change_email_rules = array
        (
            array
                (
                    'field' => 'old_email',
                    'label' => 'Старый (email)',
                    'rules' => 'required|valid_email'
                ),
        
           array
                (
                    'field' => 'new_email',
                    'label' => 'Новый (email)',
                    'rules' => 'required|valid_email'
                )
        );
    
    /*Rules for password recovery*/
    public $forgot_pswd_rules = array
        (
            array
                (
                    'field' => 'login',
                    'label' => 'Логин',
                    'rules' => 'required|min_length[3]|max_length[20]'
                ),
        
           array
                (
                    'field' => 'email',
                    'label' => 'email',
                    'rules' => 'required|valid_email'
                )
        );
    
    /*----------------Rules for Admin panel-----------------*/
    
    
    /*Rules for adding article*/
    public $articles = array
        (
            array
                (
                    'field' => 'title',
                    'label' => 'Название статьи',
                    'rules' => 'required'
                ),
       
            array
                (
                    'field' => 'id',
                    'label' => 'id',
                    'rules' => 'required'
                ),
            array
                (
                    'field' => 'text',
                    'label' => 'Текст',
                    'rules' => 'required'
                ),
            array
                (
                    'field' => 'keywords',
                    'label' => 'Ключевые слова',
                    'rules' => 'required'
                ),
            array
                (
                    'field' => 'category',
                    'label' => 'Категория статьи',
                    'rules' => 'required'
                )
        );  
    
    /*Rules for adding category*/
    public $categories = array
        (
            array
                (
                    'field' => 'title',
                    'label' => 'Название категории',
                    'rules' => 'required'
                ),

            array
                (
                    'field' => 'title_url',
                    'label' => 'Название категории (на английском)',
                    'rules' => 'required'
                ),
            array
                (
                    'field' => 'keywords',
                    'label' => 'Ключевые слова',
                    'rules' => 'required'
                )
        );   
    
    /*Rules for adding category*/
    public $users = array
        (
            array
                (
                    'field' => 'username',
                    'label' => 'Логин',
                    'rules' => 'required'
                ),

            array
                (
                    'field' => 'password',
                    'label' => 'Пароль',
                    'rules' => 'required'
                ),
            array
                (
                    'field' => 'email',
                    'label' => 'Эл.почта',
                    'rules' => 'required'
                )
        );   
}