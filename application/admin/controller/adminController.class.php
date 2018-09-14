<?php

namespace application\admin\controller;

use core\Controller;
use core\rbac as power;

class adminController extends Controller {

    protected $nav;

    public function __construct() {
        parent::__construct();
        //进行权限验证
        $this->authentication();
        $this->public_left();
        //session_start();
    }

    //权限验证
    public function authentication() {
        //login,verification方法不做session校验
       /* if (FOLDER_NAME == 'admin' && CONTROLLER_NAME == 'index' && !in_array(FUNCTION_NAME, array('login', 'verification'))) {
            //登录检查
            if (!$_SESSION['uid']) {
                echo '<script>alert("未登录");location.href="index.php?f=admin&m=index&a=login"</script>';
                die;
            } else {
                //权限检查
                if ($_SESSION['uid'] != 1) {
                    $power = unserialize($_SESSION['power']);
//                    dump(CONTROLLER_NAME . '/' . FUNCTION_NAME);
                    if (!array_key_exists(CONTROLLER_NAME, $power) || !in_array(FUNCTION_NAME, $power[CONTROLLER_NAME])) {
                        echo '没有权限,3秒后自动跳转...<script>setTimeout(function(){history.go(-1);},3000);</script>';
                        die;
                    }
                }
            }
        }*/
    }

    //验证密码
    public function verification() {
        $user = post($_POST['user']);
        $pass_confirmation = post($_POST['pass_confirmation']);
        $userinfo = M('user')->where('username = "' . $user . '" and password = "' . md5($pass_confirmation) . '" and status = 1')->find();
        if ($userinfo) {
            //登录成功后注册session
            $_SESSION['uid'] = $userinfo['id'];
            $_SESSION['uname'] = $userinfo['username'];
            //查询用户角色组
            $sql = 'SELECT a.id,b.role_id FROM `p_user` AS a INNER JOIN p_role_user AS b ON a.id = b.user_id WHERE a.id =' . $userinfo['id'] . ';';
            $role = M()->exec_sql($sql);
            $data = implode(',', array_column($role, 'role_id'));
            //根据用户组获取权限操作
            $rbac = new power();
            $power = $rbac->AuthSelect($data);
            $_SESSION['power'] = serialize($power);
            echo json_encode(array('status' => 1, 'msg' => '登录成功', 'url' => '/index.php?f=admin&m=index&a=index'));
        } else {
            echo json_encode(array('status' => 0, 'msg' => '账号或密码错误', 'url' => '/index.php?f=admin&m=index&a=login'));
        }
    }

    public function public_left() {
        $power = unserialize($_SESSION['power']);
        $list = array();
        if ($power) {
            foreach ($power as $k => $v) {
                $controller = M('application')->where('url="' . $k . '"')->field('id,name')->find();
                if ($controller) {
                    $list[$k]['controller'] = $controller;
                    $tmp_f = '';
                    $function = array();
                    if ($v) {
                        foreach ($v as $vv) {
                            $tmp_f .= '"' . $vv . '",';
                        }
                        $tmp_f = substr($tmp_f, 0, -1);
                        $function = M('application')->where('pid ="' . $controller['id'] . '" and url in(' . $tmp_f . ')')->field('name,url')->select();
                        //$function = array_column($function, null, 'url');
                    }
                    $list[$k]['functions'] = $function;
                }
            }
        }
//        dump($list);
        $this->assign('left_nav', $list);
    }

}
