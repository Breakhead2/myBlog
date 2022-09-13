<?php

use myblog\engine\{Autoload};

include "./engine/Autoload.php";
include "./config/config.php";

spl_autoload_register([new Autoload("myblog"), "loadClasses"]);

$controller = $_GET['c'] ?: 'home';
$action = $_GET['a'];

$controllerName = CLASS_NAMESPACE . ucfirst($controller) . "Controllers";

if(class_exists($controllerName)){
    $controllerClass = new $controllerName();
    $controllerClass->runAction($action);
}else{
    echo "404, такого контроллера не существует";
    die();
}