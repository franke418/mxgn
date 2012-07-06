<?php
/**
 * User: Franke Yang <franke418@gmail.com>
 * Date: 6/19/12
 * Time: 3:45 PM
 * Description:
 */
class Settings extends CI_Model
{
    private $_table ='settings';

    function get(){
        $rs = $this->db->get_where($this->_table,array('id'=>1))->result_array();
        return $rs[0];
    }
    
    function start_or_stop($status)
    {
        $data = array('can_reg'=>$status);
        $this->db->where('id',1);
        $rs = $this->db->update($this->_table,$data);
        return $rs;
    }
}
