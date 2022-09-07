<?php

namespace myblog\models;

use myblog\models\Models;

class Posts extends Models
{
    public int $id;
    public string $title;
    public string $author;
    public string $text;
    public string $data;

    public function getTableName():string
    {
        return "posts";
    }
}