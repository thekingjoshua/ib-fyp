<?php 
// Check if it running on a local server
// var_dump($_SERVER)G
if ($_SERVER['REQUEST_URI'] === "/ib-fyp/") {
    return [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'ib_fyp_db',
        'username' => 'root',
        'password' => '',
    ];
} else {
    // Check if it is running on the production server
    return [
        'host' => 'localhost',
        'port' => 3307,
        'dbname' => 'ib_fyp_db',
        'username' => 'root',
        'password' => '',
    ];
}

