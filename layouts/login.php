<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/login_style.css">
</head>
<body>
    <?php 
    require_once "env.php";

    $login = new App\Login();
    if (isset($_POST['submit'])) {
        $login->setEmail($_POST['username']);
        $login->setPassword($_POST['password']);
        
        $login->proses();
    }
    ?>

    <?php
        if(!isset($_GET['username'])){
            include 'pages/auth/login.php';
        }
    ?>
</body>
</html>