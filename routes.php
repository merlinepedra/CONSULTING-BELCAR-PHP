<?php
namespace App;
use App\Controllers\UserController;
use App\Core\SQLConexion;

//var_dump($_POST);

$controller = new UserController();
if ($_POST) {
    $controller-> store($_POST);
}

$uri = $_SERVER["REQUEST_URI"];





if ($uri == '/users' || $uri == '/'){
    

    $controller -> index();
}


if ($uri == '/users/create'){
    $controller -> create();
}
