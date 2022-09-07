<?php

namespace myblog\models\interfaces;

interface IModels
{
    public function getTableName();
    public function getOne($id);
    public function getAll();
}