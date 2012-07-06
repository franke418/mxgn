<?php
/*
* Base Controller for whole applicaton.
* 2012-6-15 14:07 Franke Yang
* Copyright 2012 (C) www.flyxg.com
*/

class MY_Controller extends CI_Controller{
	
	protected $request_method;
	public $setting;
	function __construct()
	{
		parent::__construct();
		$this->request_method = $_SERVER['REQUEST_METHOD'];
        $this->setting = $this->settings->get();
        $this->assign('settings',$this->setting);
	}

	function assign($name,$value)
	{
		$this->ez_smarty->assign($name,$value);
	}

	function display($tpl)
	{
		$this->ez_smarty->display($tpl);
	}
}
?>