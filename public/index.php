<?php

use myblog\engine\{Autoload};
use myblog\models\{Posts, Users};

include "./engine/Autoload.php";

spl_autoload_register([new Autoload("myblog"), "loadClasses"]);

