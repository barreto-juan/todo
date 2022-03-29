<?php
    session_start();

    require_once 'connection.php';

    $getUserLogin = $_POST['user'];
    $getUserPassword = md5($_POST['password']);

    $setQuery = "SELECT * FROM `login` WHERE `user`='$getUserLogin' AND `password`='$getUserPassword' LIMIT 1";

    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    if (mysqli_num_rows($setSQL) == 0) {
        unset($_SESSION['user']);
        unset($_SESSION['password']);
        header('location: index.php');

    } else {
        $_SESSION['user'] = $getUserLogin;
        $_SESSION['password'] = $getUserPassword;
        header('location: index.php');
    }
    