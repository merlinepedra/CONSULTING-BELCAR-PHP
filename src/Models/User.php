<?php
namespace App\Models;
use App\Core\Database;
use App\Core\IUserRepository;
use App\Core\SQLUserRepository;
class User {
    public ?int $id =null;
    public $date;
    public $name;
    public $issue;
    private IUserRepository $db;
    
    public function __construct($data = null)
     {
         if ($data) {
        $this->id = isset($data['id'])? $data['id'] : null;
        $this->date = $data['date'];
        $this->name = $data['name'];
        $this->issue = $data['issue'];
    }
    $this->db = new SQLUserRepository();
     }
        public function all(){
            $usersList = [];
            foreach($this->db->getAll() as $item) {
                array_push($usersList, new self ($item));
            }
            return $usersList;
    }
   
    public function save() {
        $this->db->save($this->name, $this->issue);
    }

    public function delete(){
        $this->db->delete($this->name, $this->issue);
    }
}