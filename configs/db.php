<?php 
// Check if it running on a local server
if ($_SERVER['COMPUTERNAME'] === 'KJOSH') {
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

