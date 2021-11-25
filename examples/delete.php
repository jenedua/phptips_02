<?php

use Source\Models\User;

require __DIR__ . "/../vendor/autoload.php";
Use Source\Models;

$user = (new User())->findById(3);
if($user){
    $user->destroy();

}else{
    var_dump($user);

}

