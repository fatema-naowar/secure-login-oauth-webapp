<?php
include_once("controller/Controller.php");
$message = null;
$controller = new Controller();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $controller->store_user($_POST);
}
$controller->show_registration($message);
