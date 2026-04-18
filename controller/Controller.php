<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'model/Model.php';
require_once 'view/ViewRegistration.php'; // View for registration
require_once 'view/ViewLogin.php'; // View for login page
require_once 'view/StoreUser.php'; // Service layer for registration (placed in view as per your setup)
require_once 'service/LoginService.php'; // Service layer for login

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    // Show the registration page
    public function show_registration($message = null)
    {
        $view = new ViewRegistration();
        $view->output($message);
    }

    // Handle user registration
    public function store_user($postData)
    {
        return (new StoreUser())->execute($postData);
    }

    // Show the login page
    public function show_login($message = null)
    {
        $view = new ViewLogin();
        $view->output($message);
    }

    // Handle user login
    public function login_user($postData)
    {
        return (new LoginService())->authenticate($postData);
    }

    // Show the secure home page (no session check required)
    public function show_secure_home()
    {
        $this->ensure_logged_in(); 
        include_once 'view/secure_home.php';
    }

    private function ensure_logged_in()
    {
        session_start();
        if (!isset($_SESSION['username'])) {
            header('Location: login.php');
            exit();
        }
    }
}

