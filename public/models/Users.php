<?php

namespace myblog\models;

class Users extends Models
{
    public int $id;
    public string $login;
    public string $pass;
    public string $email;
    public string $name;
    public string $lastname;

    public function getTableName():string
    {
        return "users";
    }
}
