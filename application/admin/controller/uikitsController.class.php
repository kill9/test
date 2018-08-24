<?php

namespace application\admin\controller;

use application\admin\controller\adminController;

class uikitsController extends adminController {

    public function __construct() {
        parent::__construct();
    }

    public function typography() {
        $this->display();
    }

}
