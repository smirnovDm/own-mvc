<?php

require_once 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'Router.php';
require_once 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'Model.php';
require_once 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'Controller.php';
require_once 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'View.php';
require_once 'app' . DIRECTORY_SEPARATOR . 'config.php';
define(ROOT, dirname(__FILE__));
$router = new core\Router();
$router->run();
//var_dump(ROOT);
ini_set('display errors', 1);
error_reporting(E_ALL);


$routes = array(
    'notes/([0-9]+)' => 'notes/show/$1',
    'notes/add' => 'notes/add',
    'notes' => 'notes/index',
    'products' => 'product/index',
    'tasks' => 'task/index',
    '' => 'index/index',
);

$str = 'Мы сеГоднЯ ходили на улицу сегодн';
$pattern = "~сегодн$~ui";

if(preg_match($pattern, $str)){
    echo 'совпадения есть!';
} else {
    echo 'совпадений нету!';
}