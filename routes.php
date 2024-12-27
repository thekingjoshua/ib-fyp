<?php
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    $baseURI = explode('/', $_SERVER['REQUEST_URI']);
} else {
    $baseURI = ['', ''];
}

$router->get("{$baseURI[1]}/", 'HomeController@login');
$router->get("{$baseURI[1]}/dashboard", 'HomeController@dashboard');
$router->get("{$baseURI[1]}/stage-one", 'HomeController@stage_one');
$router->get("{$baseURI[1]}/dashboard/upload-original", 'HomeController@uploadOriginal');



$router->post("{$baseURI[1]}/login", 'HomeController@auth_login');