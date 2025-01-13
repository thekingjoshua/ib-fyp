<?php
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    $baseURI = explode('/', $_SERVER['REQUEST_URI']);
} else {
    $baseURI = ['', ''];
}

$router->get("{$baseURI[1]}/", 'HomeController@login');
$router->get("{$baseURI[1]}/dashboard", 'HomeController@dashboard');
$router->get("{$baseURI[1]}/stage-one", 'HomeController@stage_one');
$router->get("{$baseURI[1]}/stage-two", 'HomeController@stage_two');
$router->get("{$baseURI[1]}/stage-three", 'HomeController@stage_three');
$router->get("{$baseURI[1]}/dashboard/upload-original", 'HomeController@uploadOriginal');
$router->get("{$baseURI[1]}/dashboard/original-files", 'HomeController@originalFiles');
$router->get("{$baseURI[1]}/dashboard/analysis/stage-one", 'HomeController@stage_one');
$router->get("{$baseURI[1]}/dashboard/analysis/stage-two", 'HomeController@stage_two');
$router->get("{$baseURI[1]}/dashboard/analysis/stage-three", 'HomeController@stage_three');
$router->get("{$baseURI[1]}/dashboard/analysis/result", 'HomeController@analysis_result');
$router->get("{$baseURI[1]}/dashboard/analysis", 'HomeController@analysis');
$router->get("{$baseURI[1]}/dashboard/analysis/view/result/{id}", 'HomeController@view_analysis_result');



$router->post("{$baseURI[1]}/login", 'HomeController@auth_login');
$router->post("{$baseURI[1]}/dashboard/submit/original-file", 'HomeController@submitOriginalFile');
$router->post("{$baseURI[1]}/dashboard/analysis", 'HomeController@submitStageOne');


$router->post("{$baseURI[1]}/dashboard/analysis/stage-one", 'HomeController@analyse_stage_one');
$router->post("{$baseURI[1]}/dashboard/analysis/stage-two", 'HomeController@analyse_stage_two');
$router->post("{$baseURI[1]}/dashboard/analysis/stage-three", 'HomeController@analyse_stage_three');