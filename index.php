<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(E_ALL & ~E_NOTICE);
session_start();
//error_reporting(0);
ini_set('date.timezone', 'Asia/Shanghai');
define('__ROOT__', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('__WWWROOT__', '/');
define('__APP__', __ROOT__ . 'application' . DIRECTORY_SEPARATOR);
define('__CONTROLLER__', __ROOT__ . 'controller' . DIRECTORY_SEPARATOR);
define('__MODEL__', __ROOT__ . 'model' . DIRECTORY_SEPARATOR);
define('__CROE__', __ROOT__ . 'include' . DIRECTORY_SEPARATOR);
define('__CONFIG__', __ROOT__ . 'config');
define('__STATIC__', __WWWROOT__ . 'static/');
define('__TEMPLATE__', __ROOT__ . 'template/');
//公共方法
include_once __CROE__ . 'functions.php';
//参数
//文件夹
$f = get($_GET['f']) ? get($_GET['f']) : 'admin';
//控制器
$m = get($_GET['m']) ? get($_GET['m']) : 'index';
//方法
$a = get($_GET['a']) ? get($_GET['a']) : 'index';
define('FOLDER_NAME', $f);
define('CONTROLLER_NAME', $m);
define('FUNCTION_NAME', $a);

//调度
include_once __CROE__ . 'dispatcher.php';
$controller = get_object();
$controller->$a();
