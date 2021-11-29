<?php
namespace App;
use App\Controllers\UserController;

// var_dump($_GET['action']);

$controller = new UserController();
$uri = $_SERVER["REQUEST_URI"];

if ($_POST) {
    $controller->save($_POST);
}

if ($uri == '/users' || $uri == '/'){
    $controller->index();
}

if ($uri == '/users/create'){
    $controller->showCreatePage();
}

if ($uri == '/users/edit'){
    $controller->showEditPage();
}

if ($_GET) {
    $action = isset($_GET['action']) ? $_GET['action'] : null;
    
    if ($action == 'delete' && isset($_GET['id'])) {
        $controller->delete($_GET);
    }

if ($_GET) {
    $action = isset($_GET['action']) ? $_GET['action'] : null;
    
    if ($action == 'edit' && isset($_GET['id'])) {
        $controller->edit($_GET);
    }
}
}

