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
    if ($model) {
        $md5_model = md5($model);
        if ($model_object[$md5_model]) {
            $mod = $model_object[$md5_model];
            $mod->table = strtolower($model);
        } else {
            $model_name = 'application' . DIRECTORY_SEPARATOR . FOLDER_NAME . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . $model . 'Model';
            if (class_exists($model_name)) {
                $mod = new $model_name();
                $mod->table = strtolower($model);
                $model_object[$md5_model] = $mod;
            } else {
                $model_name = 'core\model';
                $mod = new $model_name();
                $mod->table = strtolower($model);
                $model_object[md5($model_name)] = $mod;
            }
        }
    } else {
        $model_name = 'core\model';
        $mod = new $model_name();
        $mod->table = strtolower(CONTROLLER_NAME);
        $model_object[md5($model_name)] = $mod;
    }
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
    if (is_string($get) && $get) {
        return addslashes($get);
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
}
