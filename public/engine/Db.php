<?php

namespace myblog\engine;

class Db
{
    protected static $link = null;

    public function __construct()
    {
        if(is_null(static::$link)){
            static::$link = new Db();
        }
    }


    public function queryOne($sql) {
        echo $sql;
    }

    public function queryAll($sql) {
        echo $sql;
    }

    public function execute($sql) {
        echo $sql;
    }
}