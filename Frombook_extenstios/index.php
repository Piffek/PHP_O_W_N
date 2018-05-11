<?php
require_once "FileException.php";
require_once 'Conf.php';
try{
    $conf = new Conf('example2.xml');
    echo $conf->get("user");
}catch (FileException $m){
    echo $m->getFileError();
}

//$conf->set('cos', '22');
//$conf->write();