<?php

use myblog\engine\{Autoload, Db};
use myblog\models\{Posts, Users};

include "./engine/Autoload.php";

spl_autoload_register([new Autoload("myblog"), "loadClasses"]);

$post = new Posts("title", "denis", "text", "09 sept 22");
$post->insert();
$post->delete();
