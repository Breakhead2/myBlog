<?php

use myblog\engine\{Autoload, Db};
use myblog\models\{Posts, Users};

include "./engine/Autoload.php";

spl_autoload_register([new Autoload("myblog"), "loadClasses"]);

$post = new Posts();
$user = new Users();
