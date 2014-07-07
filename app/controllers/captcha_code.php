<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Captcha_code extends SB_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->library('Authcode');
	}
	function index()
	{
		$conf['name']='yzm';
		//$this->load->library('captcha',$conf);
		//$this->captcha->show();
		
		$this->authcode->show();      
	}
}