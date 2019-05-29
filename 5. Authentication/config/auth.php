<?php
    session_start();
    $auth = isset($_SESSION['auth']);
    if($auth){
        echo "<script> location='index.php' </script>";
    }
    else
    {
        echo "<script> alert('Please login to continue') </script>";
        echo "<script> location='loginform.php' </script>";
    }

?>
