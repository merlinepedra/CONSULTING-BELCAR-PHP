<?php
namespace App\Core;


class Database  implements IUserRepository
{

    private $users = [
        [
            'id' => 1,
            'date' => '16/10/21',
            'name' => 'Maria',
            'issue' => 'I need help with PHP',
        ],
        [
            'id' => 2,
            'date' => '17/10/21',
            'name' => 'Jose',
            'issue' => 'I cant make tests',
        ]
        ];

    public function getAll() {
        return $this->users;
    }
}
?>