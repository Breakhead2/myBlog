<?php

use myblog\engine\Autoload;
use myblog\models\Posts;

include "./engine/Autoload.php";

spl_autoload_register([new Autoload(), "loadClasses"]);

$post = new Posts;
