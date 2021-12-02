<?php
namespace App\Controllers;
use App\Models\User;
use App\Core\View;

class UserController {
    public function index() {
        $users = (new User())->all();
        new View("userList", ["users" => $users]);
    }

    public function showCreatePage(){
        new View("userCreate");
    }

    public function showEditPage($request){
        $id = $request["id"];
        $user = (new User())->findById($id);
        new View("userEdit", ["user" => $user]);
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

    public function update($request) {
        $userToSave = new User($request);
        $userToSave->update();
        $this->redirect('/');
    }
    
    private function redirect(string $url) {
        header("Location: {$url}");
    }
};


