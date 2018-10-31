<?php

$model_object = array();

//url方法
function U($url, $param = array(), $f = 'admin') {
    if ($url) {
        $url_array = explode('/', $url);
        $url_str = 'index.php?f=' . $f . '&m=' . $url_array[0] . '&a=' . $url_array[1];
        if ($param && is_array($param)) {
            foreach ($param as $k => $v) {
                $url_str .= '&' . $k . '=' . $v;
            }
        }
        echo $url_str;
    }
}

//打印
function dump($array) {
    echo '<pre>';
    var_dump($array);
    die;
}

//获取model对象
function M($model = '') {
    global $model_object;
    $model_name = 'application' . DIRECTORY_SEPARATOR . FOLDER_NAME . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . $model . 'Model';
    if ($model && class_exists($model_name)) {
        $model_name = 'core\model';
        $mod = new $model_name();
    } else {
        $model_name = 'core\model';
        $mod = new $model_name();
        $mod->table = strtolower(CONTROLLER_NAME);
    }
    $mod->table = strtolower($model);
    return $mod;
}

//debug tree
function get_debug_tree() {
    echo '<pre>';
    var_dump(debug_backtrace());
    die;
}

//get
function get($get) {
    intval($get);
    if (is_string($get) && $get) {
        return addslashes($get);
    }
    if (is_numeric($get)) {
        return (int) $get;
    }
    return '';
}

function post($post) {
    if (is_array($post)) {
        return $post;
    }
    if (is_string($post)) {
        return addslashes($post);
    }
    if (is_numeric($get)) {
        return (int) $get;
    }
}
