<?php
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    $baseURI = explode('/', $_SERVER['REQUEST_URI']);
} else {
    $baseURI = ['', ''];
}

$router->get("{$baseURI[1]}/", 'HomeController@login');
$router->get("{$baseURI[1]}/stage-one", 'HomeController@stage_one');



$router->post("{$baseURI[1]}/login", 'HomeController@auth_login');