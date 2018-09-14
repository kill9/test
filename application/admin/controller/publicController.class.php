<?php

namespace application\admin\controller;

use core\Controller;

class publicController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    //登录
    public function login() {
        $_SESSION = array();
        $this->display();
    }

    //登出
    public function loginout() {
        $_SESSION = array();
        $this->redirect('public/login');
    }

}
