<?php
    session_start();
    $_SESSION['token'] = md5(uniqid(mt_rand(), true));

    if(!isset($_SESSION["email"])) {
        header("Location: login.php");
        exit();
    }
?>