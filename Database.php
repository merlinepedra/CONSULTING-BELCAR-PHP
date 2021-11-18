<?php

class Database 
{

    private $movies = [
        [
            'id' => 1,
            'title' => 'A ghost story',
            'image' => 'http://www.elespectadorimaginario.com/wp-content/webpc-passthru.php?src=http://www.elespectadorimaginario.com/wp-content/uploads/cartel-de-a-ghost-history.jpg&nocache=1'
        ],
        [
            'id' => 2,
            'title' => 'In the mood for love',
            'image' => 'https://i.pinimg.com/564x/82/bb/e4/82bbe4de049fe4a5b1ddd55c627f7bee.jpg'
        ]
        ];

    public function getAll() {
        return $this->movies;
    }
}
?>