<?php

use assets\src\Api;

spl_autoload_register(function ($class){
    $path = str_replace('\\'
        , '/'
        , $class.'.php'
    );

    if(file_exists($path))
        require_once $path;
});

$api = new Api;
$api->processApi();