<?php
namespace App\Core;

interface IUserRepository{
    function getAll();
    function save($name, $issue);
}