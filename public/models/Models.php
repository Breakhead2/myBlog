<?php

namespace myblog\models;

use myblog\engine\Db;
use myblog\models\interfaces\IModels;

abstract class Models implements IModels
{
    abstract public function getTableName();

    public function getOne($id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryOne($sql, ['id' => $id], static::class);
    }

    public function getAll()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }

    public function insert():object
    {
        $fields = [];
        $params = [];
        $placeholders = [];
        $tableName = $this->getTableName();

        foreach ($this as $key => $value){
            if($key == 'id') continue;
            $fields[] = $key;
            $params[":" . $key] = $value;
        }

        foreach ($params as $key => $value){
            if($key == 'id') continue;
            $placeholders[] = $key;
        }

        $fields = implode(', ', $fields);
        $placeholders = implode(', ', $placeholders);
        $sql = "INSERT INTO {$tableName} ({$fields}) values ({$placeholders})";

        Db::getInstance()->execute($sql, $params);

        $this->id = Db::getInstance()->getLastInsertId();

        return $this;
    }

    public function update(){
        //TODO сделать!
    }

    public function delete(){
        $tableName = $this->getTableName();
        $id = $this->id;
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, [":id" => $id]);
    }
}