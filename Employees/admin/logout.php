<?php
    session_start();
    session_destroy();
    echo '<script>alert("Logged-out Successfully!!!")</script>';
    echo '<script>window.location.replace("../login.php");</script>';
    
    // header('location: index.php');
?>