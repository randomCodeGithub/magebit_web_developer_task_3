<?php
//DIRECTORIES
$page_directory = dirname($_SERVER["PHP_SELF"]);

define('ROOT', dirname(__FILE__));

//project root
define('BASE_ROOT', 'http://localhost' . $page_directory);

//view root
define('VIEW_ROOT', __DIR__ . '/views');

//home root
define('HOME_ROOT', $page_directory);

session_start();

require_once('./system/Autoload.php');

$router = new Router();
$router->run();
