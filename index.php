<?php 
require 'vendor/autoload.php';
require 'session.php';

    try {
        $session = SessionManager::getCurSes();
    } catch (Exception $e) {
        header('location: /login.php');
        exit(0);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>Hello <?= $session->username; ?></h1>
    <h1>Selamat datang sebagai <?= $session->role; ?></h1>
    <a href="/logout.php">Keluar</a>
</body>
</html>