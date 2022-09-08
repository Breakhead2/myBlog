<?php

namespace myblog\models;

use myblog\engine\Db;
use myblog\models\Models;

class Posts extends Models
{
    public int $id;
    public $title;
    public $author;
    public $text;
    public $data;

    public function __construct($title = null, $author = null, $text = null, $data = null)
    {
        $this->title = $title;
        $this->author = $author;
        $this->text = $text;
        $this->data = $data;
    }

    public function getTableName():string
    {
        return "posts";
    }
}