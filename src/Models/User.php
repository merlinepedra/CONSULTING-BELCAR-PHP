<?php
namespace App\Models;
use App\Core\Database;

class User {
    public $id;
    public $date;
    public $name;
    public $issue;
    private $db;
    public function __construct($data = null)
     {
         if ($data) {
        $this->id = $data['id'];
        $this->date = $data['date'];
        $this->name = $data['name'];
        $this->issue = $data['issue'];
    }
    $this->db = new Database();
     }
        public function all(){
            $usersList = [];
            foreach($this->db->getAll() as $item) {
                array_push($usersList, new self ($item));
            }
            return $usersList;
    }
   
}