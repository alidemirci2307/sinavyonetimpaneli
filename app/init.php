<?php
require_once __DIR__ . '/firebase.php';
require_once __DIR__ . '/static_query.php';
session_start();
ob_start();
$config =  require __DIR__  . '/config.php';
function loadClasses($className){
    //echo $className;
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}

foreach (glob(__DIR__ . '/helper/*.php') as $helperFile){
    require $helperFile;
}
//spl_autoload_register('loadClasses');

/*
// Imports the Cloud Storage client library.


$data = [
    'uygulamanin_adi' => '',
    'state' => 'CB',
    'country' => 'USA'
];
//$db->collection('cities')->document('LA')->set($data);

$data = [
    'name' => 'Tokyo',
    'country' => 'Japan'
];
//$addedDocRef = $db->collection('cities')->add($data);
//printf('Added document with ID: %s' . PHP_EOL, $addedDocRef->id());


*/
