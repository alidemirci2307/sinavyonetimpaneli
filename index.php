<?php

require  __DIR__ . '/app/init.php';

require_once __DIR__ . '/setup.php';

$route =  array_filter(explode('/',$_SERVER['REQUEST_URI']));
if(SUBFOLDER){
    array_shift($route);
}

if(!route(0)){
    $route[0] = 'index';
}

if(!file_exists(controller(route(0)))){
    $route[0] = '404';
}
//print_r($route);
require  controller(route(0));

