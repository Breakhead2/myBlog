<?php

namespace myblog\engine;

use myblog\models\traits\TSingleton;

class Db
{
    private static ?object $connection = null;

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    use TSingleton;

    //TODO реализовать подключение к базе данных через PDO. Подключаться надо 1 раз!

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