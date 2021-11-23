<?php
namespace App\Controllers;
use App\Models\User;

class UserController {
    public function index(){
        $users = (new User())->all();
        require_once __DIR__ .'/../Views/Pages/userList.php'; 
    }
    public function create(){

        require_once __DIR__ .'/../Views/Pages/userCreate.php'; 
    }

    public function store($request) {
        $userToSave = new User ($request);
        $userToSave->save();
    }
};
