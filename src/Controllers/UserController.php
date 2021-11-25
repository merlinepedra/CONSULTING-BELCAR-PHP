<?php
namespace App\Controllers;
use App\Models\User;

class UserController {
    public function index() {
        $users = (new User())->all();
        require_once __DIR__ .'/../Views/Pages/userList.php'; 
    }

    public function showCreatePage(){
        require_once __DIR__ .'/../Views/Pages/userCreate.php'; 
    }

    public function save($request) {
        $userToSave = new User($request);
        $userToSave->save();
        $this->redirect('/'); 
    }

    public function delete($request) {
        $userToDelete = new User($request);
        $userToDelete->delete();
        $this->redirect('/'); 
    }

    private function redirect(string $url) {
        header("Location: {$url}");
    }
};

