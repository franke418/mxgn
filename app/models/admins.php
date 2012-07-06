<?php
class Admins extends CI_Model{
	private $_table = 'admins';

	function is_valid($admin)
	{
		if(empty($admin['username']) || empty($admin['password'])){
			return FALSE;
		}else{
			return TRUE;
		}
	}

	function login($admin)
	{
		if($this->is_valid($admin)){
			$condition = array('username' =>$admin['username'] ,'password'=>$admin['password'] );
			$rs = $this->db->get_where($this->_table,$condition)->result_array();
			if(empty($rs))
			{
				return FALSE;
			}else{
				return TRUE;
			}
		}else{
			return FALSE;
		}
	}
}
?>