<?php
require_once __DIR__ .'/../Models/User.php';

class UserController {
    public function index(){
        $users = (new User())->all();
        require_once __DIR__ .'/../Views/Pages/userList.php'; 
    }
    public function create(){

        require_once __DIR__ .'/../Views/Pages/userCreate.php'; 
    }
};
