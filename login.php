<?php
include_once("controller/Controller.php");

$message = null;
$controller = new Controller();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $controller->login_user($_POST); // Call login_user to handle login
}

$controller->show_login($message); // Show login page with any potential message
