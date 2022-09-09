<?php

namespace myblog\models;

class Comments extends Models
{
    public $id;
    public $post_id;
    public $name;
    public $text;

    public function __construct($post_id = null, $name = null, $text = null)
    {
        $this->post_id = $post_id;
        $this->name = $name;
        $this->text = $text;
    }

    public function getTableName():string
    {
        return "comments";
    }
}