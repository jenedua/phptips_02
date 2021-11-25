<?php

use Source\Models\User;

require __DIR__ . "/../vendor/autoload.php";

/*
use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();

$error = Connect::getError();

if($error){
    echo $error->getMessage();
    die();
}

//var_dump(true);
$query = $conn->query('SELECT * FROM users');
var_dump($query->fetchAll());
*/


$user = new User();
$list = $user->find()->fetch(true);
/**@var $userItem User */
foreach($list as $userItem){
    var_dump($userItem->data());
    foreach($userItem->Addresses() as $address){
        var_dump($address->data());


    }
    
}
