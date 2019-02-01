<?php
//define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
//define("WWW", ROOT . '/public');
//define("APP", ROOT . '/app');
////define("CORE", ROOT . '/vendor/ishop/core');
////define("LIBS", ROOT . '/vendor/ishop/libs');
//define("CACHE", ROOT . '/tmp/cache');
//define("CONFIG", ROOT . '/config');
//
////полный путь
// $app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['HTTP_SELF']}";
// //убираем название index.php
// $app_path = preg_replace("#^/+$#", '', $app_path);
// //remove /public
// $app_path = str_replace("/public", '', $app_path);
// define("PATH", $app_path);
// //папки пока нет, название м.б. другое. В общем папка админа
// define("ADMIN", $app_path . '/admin');
 
 require_once ROOT . '/vendor/autoload.php';
 require_once 'Routes.php';