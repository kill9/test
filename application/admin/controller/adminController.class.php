<?php

namespace application\admin\controller;

use core\Controller;
use core\rbac as power;

class adminController extends Controller {

    protected $nav;

    public function __construct() {
        parent::__construct();
        $nav = $_GET['nav'] ? $_GET['nav'] : 1;
        //进行权限验证
        $this->authentication();
        $this->assign('nav', $nav);
        $this->public_left();
        //session_start();
    }

    //权限验证
    public function authentication() {
        //login,verification方法不做session校验
        if (FOLDER_NAME == 'admin' && CONTROLLER_NAME == 'index' && !in_array(FUNCTION_NAME, array('login', 'verification', 'index'))) {
            //登录检查
            if (!$_SESSION['uid']) {
                echo '<script>alert("未登录");location.href="index.php?f=admin&m=index&a=login"</script>';
                die;
            } else {
                //权限检查
                if ($_SESSION['uid'] != 1) {
                    $power = unserialize($_SESSION['power']);
                    if (!$power[CONTROLLER_NAME] || !in_array($power[CONTROLLER_NAME]['functions'], FUNCTION_NAME)) {
                        echo '<script>alert("没有权限");location.href="index.php?f=admin&m=index&a=index"</script>';
                        die;
                    }
                }
            }
        }
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
            //获取权限操作
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
        $this->assign('power', $power);
    }

}
