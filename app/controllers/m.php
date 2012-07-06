<?php
class M extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        redirect(site_url("m/login"));
    }

    function search_player($id = NULL)
    {
        if(NULL === $id){
            # show seach form
            $this->display('admin/search_player_form.tpl.php');
        }else{
        	$id = substr($id,1,strlen($id));
            $p = $this->players->show_one($id);
            if($p != NULL){
            	$this->assign('p',$p);
            }
            
            $this->display('admin/search_player_result.tpl.php');
        }
    }

    function edit_post($pid = 0)
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        if ($this->request_method == 'GET') {
            $p = $this->notices->get_one($pid);
            $this->assign('p', $p);
            $this->display('admin/edit.tpl.php');
        } elseif ($this->request_method == 'POST') {
            $data = $this->input->post(NULL, TRUE);
            $d_s = FALSE;
            foreach ($data as $d) {
                if (empty($d) || $d == NULL) {
                    $d_s = FALSE;
                    break;
                } else {
                    $d_s = TRUE;
                    break;
                }
            }
            if ($d_s) {
                $id = $data['id'];
                unset($data['id']);
                $rs = $this->notices->edit($id, $data);
                if ($rs) {
                    $_SESSION['message']['notice'] = array('type' => 'success', 'text' => '编辑成功!');
                    return redirect(site_url('m/show_post'));
                } else {
                    $_SESSION['message']['notice'] = array('type' => 'error', 'text' => '编辑失败!');
                    return redirect(site_url('m/edit_post/{$id}'));
                }
            } else {
                $_SESSION['message']['notice'] = array('type' => 'error', 'text' => '编辑失败!');
                return redirect(site_url('m/edit_post/{$id}'));
            }
        }

    }

    function show_player($id)
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        $player = $this->players->show_one($id);
        $this->assign('player', $player);
        $this->display('admin/show_player.tpl.php');
    }

    function status($status)
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        if (!isset($status)) {
            die('Error!');
        }
        $rs = $this->settings->start_or_stop($status);
        if ($rs) {
            header('Content-Type:text/html;charset=utf-8');
            echo "<script>alert('操作成功！请返回。');history.go(-1);</script>";
        } else {
            header('Content-Type:text/html;charset=utf-8');
            echo "<script>alert('操作失败！请返回。');history.go(-1);</script>";
        }
    }

    function verify($id)
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        $rs = $this->players->verify($id);
        if ($rs) {
            header('Content-Type:text/html;charset=utf-8');
            echo "<script>alert('审核成功！请返回。');history.go(-1);</script>";
        } else {
            header('Content-Type:text/html;charset=utf-8');
            echo "<script>alert('{mysql_error()}');history.go(-1);</script>";
        }
    }

    function valid_player($page_no = 1)
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        $page_size = 10;
        list($count,$players) = $this->players->show_list($page_size, ($page_no - 1) * $page_size, 1);
        $this->load->library('pagination');
        $config['full_tag_open']='<ul class="pager">';
        $config['full_tag_close']='</ul>';
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['cur_tag_open']='<li class="current">';
        $config['cur_tag_close']='</li>';
        $config['next_link']=FALSE;
        $config['prev_link']=FALSE;
        $config['uri_segment']=3;
        $config['base_url']=site_url('m/valid_player');
        $config['total_rows']=$count;
        $config['per_page']=$page_size;
        $config['use_page_numbers']=TRUE;
        $this->pagination->initialize($config);
        $this->assign("page_links",$this->pagination->create_links());
        $this->assign('players', $players);
        $this->display('admin/valid_players.tpl.php');
    }

    function verify_player($page_no = 1)
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        $page_size = 50;
        list($count,$players) = $this->players->show_list($page_no * $page_size, ($page_no - 1) * $page_size, 0);
        $this->assign('players', $players);
        $this->display('admin/show_players.tpl.php');
    }

    function delete_post($id = 0)
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        if ($this->input->is_ajax_request()) { //ajax提交才作出響應，忽略其他http方法
            if ($id === 0) { //即未提交ID值，可能是僞造提交
                $ret_data = array('status' => FALSE, 'message' => '错误的参数！');
            } else {
                $this->notices->delete($id);
                $ret_data = array('status' => TRUE, 'message' => '删除成功！' . $id);
            }
        }
        header("Content-type: application/json");
        echo json_encode($ret_data);
    }

    function show_post()
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        $rs = $this->notices->get_all_title(100);
        $this->assign('notices', $rs);
        $this->display('admin/show_list.tpl.php');
    }

    function add_post()
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        if ($this->request_method == 'GET') {
            $this->display('admin/add.tpl.php');
        } elseif ($this->request_method == 'POST') {
            $notice = $this->input->post(NULL, TRUE);
            if ($this->notices->add_new($notice)) {
                $_SESSION['message']['notice'] = array('type' => 'success', 'text' => 'Add success!');
            } else {
                $_SESSION['message']['notice'] = array('type' => 'error', 'text' => mysql_error());
            }
            return redirect(site_url('m/add_post'));
        }
    }

    function login()
    {
        if ($this->request_method == 'GET') {
            $this->display('admin/login.tpl.php');
        } elseif ($this->request_method == 'POST') {
            $admin = $this->input->post(NULL, TRUE);
            $ret = $this->admins->login($admin);
            if ($ret) {
                $_SESSION['user'] = $admin;
                $_SESSION['message']['login'] = array('type' => 'success', 'text' => '登录成功!');
            } else {
                $_SESSION['message']['login'] = array('type' => 'error', 'text' => '登录失败!');
            }
            return redirect(site_url('m/login'));
        }

    }

    function logout()
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        session_destroy();
        return redirect(site_url("m"));
    }

    function home()
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        if ($this->request_method == 'GET') {
            $this->display('admin/add.tpl.php');
        }
    }

    function file_manager()
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        $php_path = dirname(BASEPATH) . '/pub/upload';
        $php_url = site_url('pub/upload');
        $root_path = $php_path . '/';
        $root_url = $php_url . '/';
        $ext_arr = array('gif', 'jpg', 'jpeg', 'png', 'bmp');

        $dir_name = empty($_GET['dir']) ? '' : trim($_GET['dir']);
        echo "dir_name:";
        print_r($dir_name);
        if (!in_array($dir_name, array('', 'image', 'other', 'file'))) {
            echo "Invalid Directory name.";
            exit();
        }
        if ($dir_name !== '') {
            $root_path .= $dir_name . "/";
            $root_url .= $dir_name . "/";
            if (!file_exists($root_path)) {
                var_dump($root_path);
                mkdir($root_path);

            }
        }
        // 根据path参数，设置各路径和URL
        if (empty($_GET['path'])) {
            $current_path = realpath($root_path) . '/';
            $current_url = $root_url;
            $current_dir_path = '';
            $moveup_dir_path = '';
        } else {
            $current_path = realpath($root_path) . '/' . $_GET['path'];
            $current_url = $root_url . $_GET['path'];
            $current_dir_path = $_GET['path'];
            $moveup_dir_path = preg_replace('/(.*?)[^\/]+\/$/', '$1', $current_dir_path);
        }
        echo realpath($root_path);
        // 排序形式，name or size or type
        $order = empty($_GET['order']) ? 'name' : strtolower($_GET['order']);
        // 不允许使用..移动到上一级目录
        if (preg_match('/\.\./', $current_path)) {
            echo 'Access is not allowed.';
            exit();
        }
        // 最后一个字符不是/
        if (!preg_match('/\/$/', $current_path)) {
            echo 'Parameter is not valid.';
            exit();
        }
        // 目录不存在或不是目录
        if (!file_exists($current_path) || !is_dir($current_path)) {
            echo 'Directory does not exist.';
            exit();
        }
        // 遍历目录取得文件信息
        $file_list = array();
        if ($handle = opendir($current_path)) {
            $i = 0;
            while (false !== ($filename = readdir($handle))) {
                if ($filename{0} == '.')
                    continue;
                $file = $current_path . $filename;
                if (is_dir($file)) {
                    $file_list[$i]['is_dir'] = true;
                    // 是否文件夹
                    $file_list[$i]['has_file'] = (count(scandir($file)) > 2);
                    // 文件夹是否包含文件
                    $file_list[$i]['filesize'] = 0;
                    // 文件大小
                    $file_list[$i]['is_photo'] = false;
                    // 是否图片
                    $file_list[$i]['filetype'] = '';
                    // 文件类别，用扩展名判断
                } else {
                    $file_list[$i]['is_dir'] = false;
                    $file_list[$i]['has_file'] = false;
                    $file_list[$i]['filesize'] = filesize($file);
                    $file_list[$i]['dir_path'] = '';
                    $file_ext = strtolower(array_pop(explode('.', trim($file))));
                    $file_list[$i]['is_photo'] = in_array($file_ext, $ext_arr);
                    $file_list[$i]['filetype'] = $file_ext;
                }
                $file_list[$i]['filename'] = $filename;
                // 文件名，包含扩展名
                $file_list[$i]['datetime'] = date('Y-m-d H:i:s', filemtime($file));
                // 文件最后修改时间
                $i++;
            }
            closedir($handle);
        }
        // 排序
        usort($file_list, 'cmp_func');
        $result = array();
        // 相对于根目录的上一级目录
        $result['moveup_dir_path'] = $moveup_dir_path;
        // 相对于根目录的当前目录
        $result['current_dir_path'] = $current_dir_path;
        // 当前目录的URL
        $result['current_url'] = $current_url;
        // 文件数
        $result['total_count'] = count($file_list);
        // 文件列表数组
        $result['file_list'] = $file_list;
        // 输出JSON字符串
        header('Content-type: application/json; charset=UTF-8');
        echo json_encode($result);
    }

    function file_upload()
    {
        if (!isset($_SESSION['user'])) {
            die("Not Allow!");
        }
        $php_path = dirname(BASEPATH) . '/pub/upload';
        $php_url = site_url('pub/upload');
        // 文件保存目录路径
        $save_path = $php_path . '/';
        // 文件保存目录URL
        $save_url = $php_url . '/';
        // 定义允许上传的文件扩展名
        $ext_arr = array('image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'), 'flash' => array('swf', 'flv'), 'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'), 'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2'));
        // 最大文件大小
        $max_size = 1000000;

        $save_path = realpath($save_path) . '/';

        // 有上传文件时
        if (empty($_FILES) === false) {
            // 原文件名
            $file_name = $_FILES['imgFile']['name'];
            // 服务器上临时文件名
            $tmp_name = $_FILES['imgFile']['tmp_name'];
            // 文件大小
            $file_size = $_FILES['imgFile']['size'];
            // 检查文件名
            if (!$file_name) {
                die("请选择文件。");
            }
            // 检查目录
            if (@is_dir($save_path) === false) {
                die("上传目录不存在。");
            }
            // 检查目录写权限
            if (@is_writable($save_path) === false) {
                die($save_path . "上传目录没有写权限。");
            }
            // 检查是否已上传
            if (@is_uploaded_file($tmp_name) === false) {
                die("临时文件可能不是上传文件。" . $tmp_name);
            }
            // 检查文件大小
            if ($file_size > $max_size) {
                die("上传文件大小超过限制。");
            }
            // 检查目录名
            $dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
            if (empty($ext_arr[$dir_name])) {
                die("目录名不正确。");
            }
            // 获得文件扩展名
            $temp_arr = explode(".", $file_name);
            $file_ext = array_pop($temp_arr);
            $file_ext = trim($file_ext);
            $file_ext = strtolower($file_ext);
            // 检查扩展名
            if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
                die("上传文件扩展名是不允许的扩展名。\n只允许" . implode(",", $ext_arr[$dir_name]) . "格式。");
            }
            // 创建文件夹
            if ($dir_name !== '') {
                $save_path .= $dir_name . "/";
                $save_url .= $dir_name . "/";
                if (!file_exists($save_path)) {
                    mkdir($save_path);
                }
            }
            $ymd = date("Ymd");
            $save_path .= $ymd . "/";
            $save_url .= $ymd . "/";
            if (!file_exists($save_path)) {
                mkdir($save_path);
            }
            // 新文件名
            $new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $file_ext;
            // 移动文件
            $file_path = $save_path . $new_file_name;
            if (move_uploaded_file($tmp_name, $file_path) === false) {
                die("上传文件失败。");
            }
            @chmod($file_path, 0777);
            $file_url = $save_url . $new_file_name;
            $this->model_file->save(array('path' => $file_url, 'owner' => $_SESSION['user']['id']));
            header('Content-type: text/html; charset=UTF-8');
            echo json_encode(array('error' => 0, 'url' => $file_url));
            exit();
        }

    }

}

?>
