<?php
/**
 * User: Franke Yang <franke418@gmail.com>
 * Date: 6/19/12
 * Time: 6:02 PM
 * Description:
 */
class Captcha extends MY_Controller
{
    /*
    Generate the captcha and save the word in session with md5 crypt
    */
    function index(){
        $this->load->helper('captcha');
        $vals = array(
            'img_path' => dirname(BASEPATH).'/pub/',
            'img_url' => base_url().'pub/',
            'img_width'=>'150',
            'img_height'=>'30'
        );
        $cap = create_captcha($vals);
        $_SESSION['captcha'] = md5($cap['word']);
        header("Content-type: image/jpeg");
        imagejpeg($cap['image']);
    }
}
