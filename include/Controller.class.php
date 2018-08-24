<?php

namespace core;

//基类控制器
class Controller {

    //参数数组
    protected $var = array();

    public function __construct() {
        
    }

    //渲染模板
    protected function display($file = '') {
        if ($file) {
            $tpl_name = $file;
        } else {
            $tpl_name = FUNCTION_NAME;
        }
        $tpl = pathinfo(get_called_class());
        $name = substr($tpl['basename'], 0, -10);
        extract($this->var);
        include_once __ROOT__ . 'template' . DIRECTORY_SEPARATOR . FOLDER_NAME . DIRECTORY_SEPARATOR . CONTROLLER_NAME . DIRECTORY_SEPARATOR . $tpl_name . '.tpl.php';
    }

    //传参
    protected function assign($name, $value) {
        $this->var[$name] = $value;
    }

    public function __call($name, $arguments) {
        $classname = get_called_class();
        echo $classname . '->' . $name . '()方法不存在';
    }

    //重定向 两种写法 1.index/index 2.index
    public function redirect($url) {
        if (strpos($url, '/') > 0) {
            $arg = explode('/', $url);
            header('Location: index.php?f=' . FOLDER_NAME . '&m=' . $arg[0] . '&a=' . $arg[1], true, 301);
        } else {
            header('Location: index.php?f=' . FOLDER_NAME . '&m=' . CONTROLLER_NAME . '&a=' . $url, true, 301);
        }
        exit;
    }

}
