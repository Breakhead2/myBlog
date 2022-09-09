<?php

namespace myblog\models\interfaces;

interface IModels
{
    public static function getTableName();
    public static function getOne($id);
    public static function getAll();
    public function save();
    public function delete();
}