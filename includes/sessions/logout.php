<?php
    session_start();
    unset($_SESSION['loggedIn']);
    unset($_SESSION['userFullname']);
    unset($_SESSION['userID']);
    session_destroy();
    header('location:../../index.php');
    exit();
?>