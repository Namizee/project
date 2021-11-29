<?php

define("DEBUG", 1); //режим разработки 1-включен
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default');

$app_path = !empty($_SERVER['HTTPS']) ? 'https' : 'http' .'://'. $_SERVER['HTTP_HOST'];
define("PATH", $app_path);
define("ADMIN", $app_path . '/admin');
echo ADMIN;
require_once ROOT . '/vendor/autoload.php';
