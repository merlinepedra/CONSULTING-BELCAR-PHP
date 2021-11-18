<?php
require_once __DIR__ .'/src/Controllers/UserController.php';

$uri = $_SERVER["REQUEST_URI"];
$controller = new UserController();

if ($uri == '/users'){
    $controller = new UserController();  
    $controller -> index();
}
if ($uri == '/users/create'){
    $controller -> create();
}