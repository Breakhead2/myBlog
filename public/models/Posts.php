<?php

namespace myblog\models;

class Posts extends DBModels
{
    protected $id;
    protected $title;
    protected $author;
    protected $text;
    protected $data;

    protected array $props = [
        "title" => false,
        "author" => false,
        "text" => false,
        "data" => false
    ];

    public function __construct($title = null, $author = null, $text = null, $data = null)
    {
        $this->title = $title;
        $this->author = $author;
        $this->text = $text;
        $this->data = $data;
    }

    public static function getTableName():string
    {
        return "posts";
    }
}