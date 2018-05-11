<?php

use one\two\Plus;

$namespaces = function($path) {
    if(preg_match('/\\\\/', $path)){
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    }

    if(file_exists("{$path}.php")){
        require_once ("{$path}.php");
    }
};

\spl_autoload_register($namespaces);

$plus = new Plus();
echo $plus->run(2);