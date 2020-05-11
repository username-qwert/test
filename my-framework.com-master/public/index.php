<?php

declare(strict_types=1);

use Core\Application\Application;
use Core\Config\Config;
use Core\Router\Router;

include_once '../vendor/autoload.php';

$routes = require_once '../app/Config/routes.php';
$database = require_once '../app/Config/database.php';

Config::setDataBase($database);

ini_set('display_errors', '1');
error_reporting(E_ALL);

$router = new Router($routes);

$app = new Application($router);
$app->start();
