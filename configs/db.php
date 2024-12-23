<?php 
// Check if it running on a local server
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    return [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'grab_back_db',
        'username' => 'root',
        'password' => '',
    ];
} else {
    // Check if it is running on the production server
    return [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'grab_back_db',
        'username' => 'grabback',
        'password' => '3f#2!U7G1HwzYe',
    ];
}

