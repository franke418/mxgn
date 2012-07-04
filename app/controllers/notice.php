<?php 
class Notice extends MY_Controller{
    function __construct(){
		parent::__construct();
	}
	function index(){
		$notices = $this->notices->get_all_title(1000);
		$this->assign('notices',$notices);
		$this->display('notice.tpl.php');
	}
	function show($id){
		$notice = $this->notices->get_one($id);
		if($notice != NULL){
			$this->assign('notice',$notice);
			$this->display('show.tpl.php');
		}else{
			die('Error when get notice!');
		}
	}
}
?>