<?php 

session_name('promasud');
session_start([
    'cookie_lifetime' => 20,
]);

 $_SESSION['name'] = "masud rana";


echo $_SESSION['name']; 

session_destroy();


