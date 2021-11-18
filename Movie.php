<?php
require_once 'Database.php';

class Movie {
    public $id;
    public $title;
    public $image;
    private $db;
    
    public function __construct($data = null)
     {
         if ($data) {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->image = $data['image'];
    }
    $this->db = new Database();
     }
        public function all(){
            $movieList = [];
            foreach($this->db->getAll() as $movie) {
                array_push($movieList, new self ($movie));
            }
            return $movieList;
    }
   
}

///this es (yo)
////self es para mi clase