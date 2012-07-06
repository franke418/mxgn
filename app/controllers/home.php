<?php
/*
 *Index controller:homepage
 *2012-6-15 14:22 Franke Yang
 *Copyright 2012 (C) www.flyxg.com 
 */
class Home extends MY_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function index(){
		log_message('info',$_SERVER['REMOTE_ADDR']);
        $notices = $this->notices->get_all_title(5);
       // $news = $this->db->query('SELECT * FROM `flyxg@com`.`supe_spaceitems` WHERE catid = 194 ORDER BY dateline DESC LIMIT 0,5')->result_array();
        //$threads = $this->db->query('SELECT * FROM `bbs_discuz`.`pre_forum_thread` where fid = 268 ORDER BY dateline DESC LIMIT 0,5')->result_array();//268
	$news = array('aa' =>'aa' , );
        $threads = array('bb' => 'bb', );
        $this->assign('threads',$threads);
		$this->assign('news',$news);
        $this->assign('notices',$notices);
        $this->display('home.tpl.php');
    }
}
?>
