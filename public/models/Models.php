<?php

namespace myblog\models;

use myblog\engine\Db;
use myblog\models\interfaces\IModels;

abstract class Models implements IModels
{
    protected Db $db;

    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    abstract public function getTableName();

    public function getOne($id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = {$id}";
        $this->db->queryOne($sql);
    }

    public function getAll()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        $this->db->queryAll($sql);
    }
}