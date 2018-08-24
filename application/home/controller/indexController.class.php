<?php

namespace application\home\controller;

use core\Controller as basicController;

class indexController extends basicController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->display();
    }

}
