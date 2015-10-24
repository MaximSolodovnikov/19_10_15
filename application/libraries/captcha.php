<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha {
    
    function get_captcha() {
        
        $CI =& get_instance();
        
        $CI->load->helper('captcha');
        $CI->load->helper('string');
        
        $string = random_string('numeric', 3);
        $ses_captcha['captcha'] = $string;
        
        $CI->session->set_userdata($ses_captcha);
        
        $vals = array(
        'word'          => $string,
        'img_path'      => './images/captcha/',
        'img_url'       => base_url() . 'images/captcha/',
        'font_path'     => './system/fonts/texb.ttf',
        'img_width'     => '180',
        'img_height'    => 55,
        'expiration'    => 20,
        'font_size'     => 30,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
                'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );
        
        $cap = create_captcha($vals);
        return $cap['image'];
    }
}
