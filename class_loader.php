<?php

spl_autoload_register('class_loader');

function class_loader($class){
    $path = "classes/";
    $extension = ".php";
    $fullpath = $path . $class .$extension;

    if (!file_exists($fullpath)) {
        return false;
    }

    include_once $fullpath;
}