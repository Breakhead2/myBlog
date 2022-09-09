<?php

namespace myblog\models;

use myblog\engine\Db;
use myblog\models\interfaces\IModels;

abstract class DBModels extends Models implements IModels
{
    abstract static public function getTableName();

    public static function getOne($id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryOne($sql, ['id' => $id], static::class);
    }

    public static function getAll()
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql, static::class);
    }

    private function insert():object
    {
        $fields = [];
        $params = [];
        $tableName = $this->getTableName();

        foreach ($this->props as $key => $value){
            $fields[] = $key;
            $params[":" . $key] = $this->$key;
        }

        $fields = implode(', ', $fields);
        $placeholders = implode(', ', array_keys($params));
        $sql = "INSERT INTO {$tableName} ({$fields}) values ({$placeholders})";

        Db::getInstance()->execute($sql, $params);

        $this->id = Db::getInstance()->getLastInsertId();

        return $this;
    }

    private function update(): object
    {
        $fields = [];
        $params = [];
        $tableName = $this->getTableName();

        foreach ($this->props as $key => $value){
            if($value){
                $params[":" . $key] = $this->$key;
                $fields[] = $key . " = :{$key}";
                $this->props[$key] = false;
            }
        }

        if(!empty($params)){
            $params[':id'] = $this->id;
            $fields = implode(', ', $fields);
            $sql = "UPDATE {$tableName} SET {$fields} WHERE id = :id";
            Db::getInstance()->execute($sql, $params);
        }

        return $this;
    }

    public function delete()
    {
        $tableName = $this->getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, [":id" => $this->id]);
    }

    public function save(){
        if(is_null($this->id)){
            $this->insert();
        }else{
            $this->update();
        }
    }
}