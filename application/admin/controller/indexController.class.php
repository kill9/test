<?php

namespace application\admin\controller;

use application\admin\controller\adminController;

class indexController extends adminController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //查询全部的栏目及方法
        $p = get($_GET['p']) ? get($_GET['p']) : 1;
        $counts = M('node')->where('pid = 0')->count();
        $page = new \core\page($counts, $p);
        $page_html = $page->show();
        $list = M('node')->where('pid = 0')->limit($page->limit_start . ',' . $page->limit_end)->select();
        foreach ($list as $k => $v) {
            $functions = M('node')->where('pid = ' . $v['id'])->select();
            $list[$k]['functions'] = $functions;
        }
        $this->assign('page', $page_html);
        $this->assign('list', $list);
        $this->display();
    }

    public function edit() {
        $id = get($_GET['id']);
        echo $id;
    }

    //权限设置
    public function power() {
        //查询所有的用户
        $sql = 'SELECT 
                a.username,
                c.`name` 
                FROM 
                `p_user` AS a 
                LEFT JOIN p_role_user AS b ON a.id = b.user_id 
                LEFT JOIN p_role AS c ON c.id = b.role_id GROUP BY a.id;';
        $user = M()->exec_sql($sql);
        $this->assign('user', $user);
        $this->display();
    }

    //我的桌面
    public function mydesktop() {
        $this->display();
    }

    //应用管理
    public function app() {
        $a = M()->exec_sql('select * from p_application');
        $controller = M('application')->select();
        $this->assign('list', $controller);
        $this->display();
    }

    //应用管理修改
    public function app_edit() {
        $this->display();
    }

    //应用管理添加子栏目
    public function app_add_channel() {
        $this->display();
    }

    //新增控制器
    public function app_add() {
        $this->display();
    }

    //新增控制器数据
    public function app_post_add() {
        $name = post($_POST['name']);
        $url = post($_POST['url']);
        $order = post($_POST['order']);
//        var_dump($_POST);
        $insert = M('application')->add($_POST);
    }

}
