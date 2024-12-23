<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Session;
use Framework\Validation;

class DashboardController
{
    protected $db;

    public function __construct()
    {
        $configs = require 'configs/db.php';
        $this->db = new Database($configs);
    }
    public function index()
    {

    }
}
