<?php 
require 'vendor/autoload.php';
require 'session.php';

setcookie('JWTSESSION','logout',time()+300000,httponly:true);
header('location: /');

?>