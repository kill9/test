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
        dump($_SESSION);
        $this->display();
    }

    public function edit() {
        $id = get($_GET['id']);
        echo $id;
    }

    public function login() {
        $this->display();
    }

}
