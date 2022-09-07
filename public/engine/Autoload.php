<?php

namespace myblog\engine;

class Autoload
{
    public function loadClasses($className) {

        $className = str_replace(['myblog\\', '\\'], ['./', '/'], $className) . ".php";

        if(file_exists($className)){
            include $className;
        }
    }
}