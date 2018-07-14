<?php

startIncludes('../services');
startIncludes('../app/dao');
startIncludes('../app/model');
startIncludes('../app/controller');

$url = explode('/', $_GET['url']);

$class = ucfirst($url[0]).'Controller';
$action = "action".ucfirst($url[1]);

if (!class_exists($class)) {
    echo "Página não encontrada";
    return;
}

$obj = new $class;
$obj->$action();

function startIncludes($path){
    foreach (scandir($path) as $filename) {
        $file = $path . '/' . $filename;
        if (is_file($file)) {
            require $file;
        }
    }
}