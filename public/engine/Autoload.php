<?php

namespace myblog\engine;

class Autoload
{
    public function loadClasses($className) {
        $className = str_replace(['myblog\\', '\\'], ['./', '/'], $className);
        include "{$className}.php";
    }
}