<?php
require './vendor/autoload.php';

use Framework\Router;
use Framework\Session;

Session::start();

require './helpers.php';

// $config = require basePath('./configs/db.php');

// $database = new Database($config);

// Instantiate the Router
$router = new Router();
// Get routes
$routes =  require basePath('routes.php');
// Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// var_dump($_SERVER['REQUEST_URI']);
// var_dump(PHP_URL_PATH);

// echo $uri;

// Route the request
$router->route($uri);

?>