<?php

namespace myblog\models;

use myblog\engine\Db;
use myblog\models\interfaces\IModels;

abstract class Models
{
    protected array $props = [];

    public function __set($name, $value)
    {
        if(isset($this->props[$name])){
            $this->props[$name] = true;
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        if(isset($this->props[$name])) return $this->$name;
    }
}