<?php
/**
* 
*/
class Notices extends CI_Model
{
	private $_table = 'notices';

	public function delete($id)
	{
		$condition = array('id'=>$id);
		$ret = $this->db->delete($this->_table,$condition);
		return $ret;
	}
	function edit($id=0,$data)
	{
		$this->db->where('id',$id);
		$rs = $this->db->update($this->_table,$data);
		return $rs;
	}
	function get_one($id=0)
	{
		$condition = array('id' => $id);
		$rs = $this->db->get_where($this->_table,$condition)->result_array();
		if(empty($rs))
			return NULL;
		else
			return $rs[0];
	}

	function get_all_title($limit=0)
	{
		$this->db->select('id,title,posttime,author');
		$this->db->order_by('id','desc');
		$rs = $this->db->get($this->_table,$limit,0)->result_array();
		if(empty($rs))
			return NULL;
		else
			return $rs;
	}

	function add_new($notice)
	{
		$notice['posttime'] = date('y-m-d h:i:s',time());
		$ret = $this->db->insert($this->_table,$notice);
		return $ret;
	}
}
?>