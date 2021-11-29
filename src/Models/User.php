<?php
namespace App\Models;
use App\Core\IUserRepository;
use App\Core\SQLUserRepository;

class User {
    public ?int $id = null;
    public $date;
    public $name;
    public $issue;
    private IUserRepository $db;
    
    public function __construct($data = null)
    {
        if ($data) {
            $this->id = isset($data['id']) ? $data['id'] : null;
            $this->date = isset($data['date']) ? $data['date'] : null;
            $this->name = isset($data['name']) ? $data['name'] : null;
            $this->issue = isset($data['issue']) ? $data['issue'] : null;
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

    public function delete() {
        $this->db->delete($this->id);
    }

    public function edit() {
        $this->db->edit($this->id, $this->name, $this->issue);
    }
}