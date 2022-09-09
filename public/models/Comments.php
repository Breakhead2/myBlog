<?php

namespace myblog\models;

class Comments extends DBModels
{
    protected $id;
    protected $post_id;
    protected $name;
    protected $text;

    protected array $props = [
        "post_id" => false,
        "name" => false,
        "text" => false
    ];

    public function __construct($post_id = null, $name = null, $text = null)
    {
        $this->post_id = $post_id;
        $this->name = $name;
        $this->text = $text;
    }

    public static function getTableName():string
    {
        return "comments";
    }
}