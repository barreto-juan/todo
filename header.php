<?php

  require_once "create_db.php";
  require_once "create_tb.php";
  require_once "connection.php";

?>

<!DOCTYPE html>
<html lang="ptbr" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <link rel="shotcut icon" href="assets/img/notas.png">

    <title>Pedidos - ToDo</title>
  </head>
  <body>

    <div id="mySidenav" class="sidenav bg-dark">
      <a href="javascript:void(0)" class="closebtn text-muted " onclick="closeNav()"><i class="fa-solid fa-close"></i></a>

      <a href="#" class="navbar-brand text-muted ">
        <img src="assets/img/notas.png" width="70" alt="">
        ToDo
      </a>

      <a class="text-muted " href="index.php"><i class="fa-solid fa-home"></i> Home</a>
      <a class="text-muted " href="discovery.php"><i class="fa-solid fa-user-group"></i> Quem Somos</a>
      <a class="text-muted " href="contact.php"><i class="fa-solid fa-headset"></i> Fale conosco</a>
      <a class="text-muted " href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>

    <span class="m-3 p-3 rounded bg-dark text-light shadow" onclick="openNav()" style="font-size: 25px; cursor: pointer;"><i class="fa-solid fa-bars"></i></span>

    <div class="container my-3">
