<?php

namespace myblog\engine;

class Autoload
{
    private string $appName;

    public function __construct($appName)
    {
        $this->appName = $appName;
    }

    public function loadClasses($className) {

        $className = str_replace([$this->appName . '\\', '\\'], ['./', '/'], $className) . ".php";

        if(file_exists($className)){
            include $className;
        }
    }
}