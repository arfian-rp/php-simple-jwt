<?php
require 'vendor/autoload.php';
require 'session.php';

$message="";
if(isset($_POST['submit'])){
    if(SessionManager::login($_POST['username'], $_POST['password'])){
        header('location: /');
        exit(0);
    }else{
        $message="gagal login";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <h1>Login</h1>
    <?= ($message)?$message:''; ?>
    <form action="" method="POST">
    <input type="text" name="username" placeholder="username" required autofocus><br>
    <input type="password" name="password" placeholder="password" required><br>
    <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>