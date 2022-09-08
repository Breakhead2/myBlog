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
        $sql = "SELECT * FROM {$tableName} WHERE id = {$id}";

    }

    public function getAll()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        $this->db->queryAll($sql);
    }
}