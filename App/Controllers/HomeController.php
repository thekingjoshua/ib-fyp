<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Session;
use Framework\Validation;

class HomeController
{
    protected $db;

    public function __construct()
    {
        $configs = require basePath('./configs/db.php');
        $this->db = new Database($configs);
    }
    /**
     * Show the latest listings
     *
     * @return void
     */
    public function index()
    {
        loadView('home');
    }
    public function login()
    {
        // Email = 'neptunian48@gmail.com'
        // Password = 'Percy$126'
        loadView('login');
    }
    public function auth_login()
    {
        $successMessages = [];
        $errorMessages = [];

        $enteredEmail = $_POST['email'];
        $enteredPassword = $_POST['password'];

        $validEmail = 'neptunian48@gmail.com';
        $validPassword = 'Percy$126';

        // CHECKING IF THE ENTERED EMAIL AND PASSWORD MATCHES
        if (Validation::match($validEmail, $enteredEmail)) {
            $successMessages[] = 'Login Successful';
        }else{
            $errorMessages[] = 'Invalid Credentials';
        };

        loadView('login', [
            "successMessages" => $successMessages,
            "errorMessages" => $errorMessages,
        ]);
    }
    public function stage_one(){
        loadView('stage-one');
    }
    public function dashboard()
    {
        loadView('home');
    }
}
