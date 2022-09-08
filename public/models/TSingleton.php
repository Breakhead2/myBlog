<?php

namespace myblog\models\traits;

trait TSingleton
{
    private static object $instance;

    public static function getInstance (): object
    {
        if(is_null(static::$instance)){
            static::$instance = new static();
        }
        return static::$instance;
    }
}