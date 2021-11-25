<?php

use Source\Models\User;

require __DIR__ . "/../vendor/autoload.php";
Use Source\Models;

$user = (new User())->findById(3);
$user->first_name = "Jenasha";
$user->save();
var_dump($user);