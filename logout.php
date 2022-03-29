<?php
    session_start();

    if (isset($_SESSION['user'])) {
        session_destroy();
        unset($_SESSION['user']);
        unset($_SESSION['password']);
        header('location:login.php');
        exit();
    }

?>