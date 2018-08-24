<?php

//自动加载控制器
function _autoloader($class) {
    $dir_array = pathinfo($class);
    if (preg_match('/^.*?model/', $dir_array['dirname'])) {
        //加载model
        if (file_exists(__ROOT__ . $dir_array['dirname'] . DIRECTORY_SEPARATOR . $dir_array['basename'] . '.class.php')) {
            include_once __ROOT__ . $dir_array['dirname'] . DIRECTORY_SEPARATOR . $dir_array['basename'] . '.class.php';
        } else {
            include_once __CROE__ . 'model.class.php';
        }
    } else if (preg_match('/^.*?core/', $dir_array['dirname'])) {
        //加载基类
        include_once __CROE__ . $dir_array['basename'] . '.class.php';
    } elseif (preg_match('/^.*?controller$/', $dir_array['dirname'])) {
        //加载controller
        include_once __ROOT__ . $dir_array['dirname'] . DIRECTORY_SEPARATOR . $dir_array['basename'] . '.class.php';
    }
}

spl_autoload_register('_autoloader');

//处理对象
function get_object() {
    $controller_name = 'application' . DIRECTORY_SEPARATOR . FOLDER_NAME . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . CONTROLLER_NAME . 'Controller';
    $controller = new $controller_name();
    return $controller;
}
