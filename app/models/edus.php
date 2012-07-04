<?php 
class Edus extends CI_Model{
	private $_table = 'edus';
	function get_one($id=0)
	{		
		$condition = array('id'=>$id);
		$rs = $this->db->get_where($this->_table,$condition)->result_array();
		return $rs[0];
	}
	function get_all()
	{
		$rs = $this->db->get($this->_table)->result_array();
		return $rs;
	}
}
?>