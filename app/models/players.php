<?php
/**
 * User: Franke Yang <franke418@gmail.com>
 * Date: 6/19/12
 * Time: 3:08 PM
 * Description:选手模型
 */
class Players extends CI_Model
{
    private $_table = 'players';

    // public $id = 0;//id
    // public $name;//姓名
    // public $reg_data;//报名日期
    // public $birthday;//生日
    // public $height;//身高
    // public $edu;//文化程度
    // public $hometown;//籍贯
    // public $career;//职业
    // public $bust;//胸围
    // public $waistline;//腰围
    // public $hip;//臀围
    // public $identity_no;//身份证号
    // public $mobile;//手机
    // public $org;//工作单位\学校
    // public $qq;
    // public $addr;//地址
    // public $phone;//家庭电话
    // public $detail;//个人简历
    // public $image;//照片
    
    function show_one($id=0)
    {
        if($id == 0 || !isset($id)){
        	return NULL;
        }else{
        	$this->db->select('*');
			$this->db->from($this->_table);
			$this->db->join('edus','players.edu = edus.id','inner');
			$this->db->where('players.id',$id);
        	
			$rs = $this->db->get()->result_array();
			if(empty($rs)){
				return NULL;
			}else{
				$r = $rs[0];
				$locs = $this->config->item('locations');
				$r['location'] = $locs[$r['location']];
				return $r;
			}
        }
    }
    
    function verify($id){
        if($id > 10000){
            $data=array('verify'=>1);
            $this->db->where('id',$id);
            $rs = $this->db->update($this->_table,$data);
            return $rs;
        }else{
            return FALSE;
        }
    }

    public function show_list($limit=10,$offset=0,$verify=0)
    {
        $condition = array('verify'=>$verify);
        $rs = $this->db->get_where($this->_table,$condition,$limit,$offset)->result_array();
		$rs1 = $this->db->get_where($this->_table,$condition)->result_array();
        return array(count($rs1),$rs);
    }

    /*
     * 判断是否已经有此用户
     */
    function is_have($a_user){
        //如果姓名或身份证号都为空，返回true，表示此用户已存在
        if(empty($a_user['name']) || empty($a_user['identity_no'])){
            return TRUE;
        }else{
            //以身份证号码进行查询
            $condition = array('identity_no'=>$a_user['identity_no']);
            $ret = $this->db->get_where($this->_table,$condition)->result_array();
            if(empty($ret)){//如果返回为空，则表示可以注册
                return FALSE;
            }else{
                return TRUE;//如果返回不为空，则表示不可以注册
            }
        }
    }

    /*
     * 判断身份证号码长度是否符合要求
     */
    function valid_indentity_no($identity_no){
        //lenth must be 15 or 18
        if(strlen($identity_no) != 15 && strlen($identity_no) != 18){
            return FALSE;
        }else{
            return TRUE;
        }
    }

    /*
     * 判断用户信息是否合法
     */
    function valid($a_user){
        unset($a_user['id']);//remove id from array
        foreach($a_user as $a){
            if($a == NULL){
                return FALSE;
                break;
            }
        }
        return TRUE;
    }
    /*
     * 用户注册
     */
    function signup($a_user){
        $ret = $this->valid($a_user) || $this->valid_indentity_no($a_user['identity_no']);
        if(!$ret){//如果不可以注册，返回false
            return array(FALSE,'姓名和身份证号不能为空。',0);
        }elseif(!$this->is_have($a_user)){
            $rs = $this->db->insert($this->_table,$a_user);
            return array($rs,'报名成功！',mysql_insert_id());
        }else{
            return array(FALSE,'该选手已注册！',0);
        }
    }

}
