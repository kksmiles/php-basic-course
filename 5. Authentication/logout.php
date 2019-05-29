<?php
    session_start();
    session_destroy();
    //session_regenerate_id();
    echo "<script>alert('Logout Success.')</script>";
    echo "<script>location='loginform.php'</script>";
?>
