<?php
    include('config/auth.php');
    $username = $_SESSION['username'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><?= $username?>'s profile</h1>
    </body>
</html>
