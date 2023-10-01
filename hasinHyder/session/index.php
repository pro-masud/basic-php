<?php 

session_name('promasud');
session_start([
    'cookie_lifetime' => 20,
    'cookie_domain'     => 'localhost'
]);

 $_SESSION['name'] = "masud rana";


echo $_SESSION['name']; 

session_destroy();


