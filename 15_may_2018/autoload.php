<?php

$namespace = function ($path){
    if(preg_match('/\\\\/', $path)){
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    }

    if(file_exists("{$path}.php")){
        require_once "{$path}.php";
    }
};

\spl_autoload_register($namespace);