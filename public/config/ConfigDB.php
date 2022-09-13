<?php

namespace myblog\config;

class ConfigDB
{
    public string $host;
    public string $dbname;
    public string $user;
    public string $pass;

    public function __construct()
    {
        $this->host = "localhost:3306";
        $this->dbname = "myblog";
        $this->user = "denis_s";
        $this->pass = "Fib0naccI12358";
    }
}