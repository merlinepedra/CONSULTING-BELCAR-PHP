<?php
namespace App;
use App\Controllers\UserController;
use App\Core\SQLConexion;

$uri = $_SERVER["REQUEST_URI"];



$controller = new UserController();

if ($uri == '/users' || $uri == '/'){
    

    $controller -> index();
}

if ($uri == '/users/create'){
    $controller -> create();
}
