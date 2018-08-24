<?php

namespace application\admin\controller;

use application\admin\controller\adminController;

class indexController extends adminController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->display();
    }

    public function login() {
        $this->display();
    }
}
