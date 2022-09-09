<?php

namespace myblog\models;

class Users extends DBModels
{
    protected $id;
    protected $login;
    protected $pass;
    protected $email;
    protected $name;
    protected $lastname;

    protected array $props = [
      "login" => false,
      "pass" => false,
      "email" => false,
      "name" => false,
      "lastname" => false
    ];

    public function __construct($login = null, $pass = null, $email = null, $name = null, $lastname = null)
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->email = $email;
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public static function getTableName():string
    {
        return "users";
    }
}
