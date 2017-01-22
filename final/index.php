<?php
//1 общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);
//2 подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

//3 установка соединения с БД

//4 вызов маршрутизатора
$router = new Router();
$router->run();

