<?php
namespace App;
use App\Controllers\UserController;


$controller = new UserController();
$uri = $_SERVER["REQUEST_URI"];

if ($_POST) {
    $action = isset($_GET['action']) ? $_GET['action'] : null;

    if ($action == 'save') {
        $controller->save($_POST);
    }

    if ($action == 'update') {
        $controller->update($_POST);
    }
}

if ($_GET) {
    $action = isset($_GET['action']) ? $_GET['action'] : null;
    
    if ($action == 'delete' && isset($_GET['id'])) {
        $controller->delete($_GET);
    }
    if ($action == 'create') {
        $controller->showCreatePage($_GET);
    }
    if ($action == 'edit' && isset($_GET['id'])) {
        $controller->showEditPage($_GET);
    }

}

if ($uri == '/users' || $uri == '/'){
    $controller->index();
}