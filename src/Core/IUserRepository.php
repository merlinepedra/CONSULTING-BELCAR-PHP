<?php
namespace App\Core;

interface IUserRepository{
    function getAll();
    function save($name, $issue);
    function delete($id);
    function edit($id, $name, $issue);
}