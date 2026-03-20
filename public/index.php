<?php
ob_start();
require_once realpath(__DIR__ . '/../vendor/autoload.php');

// const for root path
define("ROOT_PATH", dirname(__DIR__));

use App\Controller\Router;
$router = new Router();
$router->router();

ob_end_flush();
