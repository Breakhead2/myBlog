<?php

namespace myblog\models;

class Users extends Models
{
    public int $id;
    public $login;
    public $pass;
    public $email;
    public $name;
    public $lastname;

    public function __construct($login = null, $pass = null, $email = null, $name = null, $lastname = null)
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->email = $email;
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function getTableName():string
    {
        return "users";
    }
}
