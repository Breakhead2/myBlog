<?php

namespace myblog\models;

class Comments extends Models
{
    public int $id;
    public int $post_id;
    public string $name;
    public string $text;

    public function getTableName():string
    {
        return "comments";
    }
}