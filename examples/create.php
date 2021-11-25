<?php

use Source\Models\User;
use Source\Models\Address;

require __DIR__ . "/../vendor/autoload.php";

$user = new User();

$user->first_name = "Jean";
$user->last_name = "Nepthalia";
$user->genre = "F";
$user->save();

$addr = new Address();
$addr->add($user, "cic","12d");
$addr->save();


var_dump($user);