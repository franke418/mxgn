<?php
/**
 * User: Franke Yang <franke418@gmail.com>
 * Date: 6/19/12
 * Time: 2:37 PM
 * Description:报名控制器
 */
class Signup extends MY_Controller
{
    function __construct(){
        parent::__construct();
    }

    function index(){
			$edus = $this->edus->get_all();
			$this->assign('edus',$edus);
	if(!$this->setting['can_reg']){
		header('Content-Type:text/html;charset=utf-8');
                echo "<script>alert('报名系统暂未开放，敬请期待！');window.close();</script>";
        }
	$this->load->library('form_validation');
	//$this->form_validation->set_error_delimiters('', '');
    	if($this->request_method == 'GET'){
    		$this->display('signup.tpl.php');
    	}else if($this->request_method == 'POST'){
		$this->load->helper('form');
		$this->form_validation->set_rules('name','姓名','required');
		$this->form_validation->set_rules('birthday','生日','required');
		$this->form_validation->set_rules('career','职业','required');
		$this->form_validation->set_rules('edu','文化程度','greater_than[0]');
		
		$this->form_validation->set_rules('hometown','籍贯','required');
		$this->form_validation->set_rules('mobile','联系电话','required|min_length[10]|max_length[12]');
		$this->form_validation->set_rules('identity_no','身份证号','required|min_length[15]|max_length[18]');
		$this->form_validation->set_rules('qq','QQ','required|numeric');
		
		$this->form_validation->set_rules('height','身高','required|numeric|less_than[200]');
		$this->form_validation->set_rules('bust','胸围','required|numeric|less_than[200]');
		$this->form_validation->set_rules('waistline','腰围','required|numeric|less_than[200]');
		$this->form_validation->set_rules('hip','臀围','required|numeric|less_than[200]');
		
		$this->form_validation->set_rules('org','工作单位/学校','required');
		$this->form_validation->set_rules('addr','地址','required');
		
		$this->form_validation->set_rules('detail','个人简历及专长','required');
    	//$this->form_validation->set_rules('image','生活照片','required');
		$this->form_validation->set_rules('captcha','验证码','required');
		
		
		$config['upload_path'] = dirname(BASEPATH).'/pub/upload/players/';
  		$config['allowed_types'] = 'jpg';
  		$config['max_size'] = '1024';
  		$config['max_width']  = '0';
  		$config['max_height']  = '0';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		
		if($this->form_validation->run() == FALSE){
		    $this->display('signup.tpl.php');
		}else{
			if(md5($_POST['captcha']) != $_SESSION['captcha'])
			{
					$error = array('error' => '验证码不正确');
					$this->assign('error',$error);
					$this->display('signup.tpl.php');
			}else{
				if ( ! $this->upload->do_upload('image'))
				{
					$error = array('error' => $this->upload->display_errors());
					$this->assign('error',$error);
					$this->display('signup.tpl.php');
				} 
			else
				{
					$data = array('upload_data' => $this->upload->data());
					$profile = $this->input->post(NULL,TRUE);
					$profile['image']=str_replace(base_url(),'',site_url("pub/upload/players/{$data['upload_data']['file_name']}"));
					unset($profile['captcha']);
					$profile['reg_date'] = date('y-m-d h:i:s',time());
					$rs =  $this->players->signup($profile);
					if($rs[0])
					{
						$this->assign('no',$rs[2]);
						$this->assign('msg',$rs[1]);
						$this->display('success.tpl.php');
					}else{
						$error = array($rs[1]);
						$this->assign('error',$error);
						$this->display('signup.tpl.php');
					}
				}
			}
		}
    	}else{
	    	header('Content-Type:text/html;charset=utf-8');
            echo "<script>alert('错误的尝试！');history.go(-1);</script>";
	}
        
    }
}
