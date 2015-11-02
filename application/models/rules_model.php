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
    /*Правила для регистрации нового пользователя*/
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
    /*Правила для изменения пароля*/
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
    
    /*Правила для изменения email*/
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
    
    /*Правила для восстановления пароля*/
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
}