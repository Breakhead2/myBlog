<?php

namespace myblog\engine;

use myblog\config\ConfigDB;
use myblog\models\traits\TSingleton;
use PDO;

class Db
{
    private ?object $DBH = null;

    use TSingleton;

    private function getConnection(): object {
        $config = new ConfigDB();

        if(is_null($this->DBH)){
            try {
                $this->DBH = new PDO("mysql:host=$config->host;dbname=$config->dbname", $config->user, $config->pass);
                $this->DBH->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }catch (\PDOException $e){
                echo "PDO error!";
                file_put_contents("./log/PDOErrors.txt", $e->getMessage(), FILE_APPEND);
            }
        }
        return $this->DBH;
    }

    private function query($sql, $params) {
        var_dump($sql);
        var_dump($params);
        $STH = $this->getConnection()->prepare($sql);
        $STH->execute($params);
        return $STH;
    }

    public function queryOne($sql, $params, $class) {
        $STH = $this->query($sql, $params);
        $STH->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $class);
        return $STH->fetch();
    }

    public function queryAll($sql, $class, $params = []) {
        $STH = $this->query($sql, $params);
        $STH->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $class);
        return $STH->fetchAll();
    }

    public function execute($sql, $params = []) {
        return $this->query($sql, $params)->rowCount();
    }

    public function getLastInsertId(){
        return $this->getConnection()->lastInsertId();
    }
}