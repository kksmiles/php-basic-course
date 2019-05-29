<?php
    include('config/connect.php');
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword)
    {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn,$query);
        echo "<script> alert('Account successfully created!') </script>";
        echo "<script> location='loginform.php' </script>";
    }
    else {
        echo "<script> alert('Make sure the passwords match.') </script>";
        echo "<script> location='registerform.php' </script>";
    }


 ?>
