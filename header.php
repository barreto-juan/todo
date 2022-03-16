<?php

  require_once "create_db.php";
  require_once "create_tb.php";
  require_once "connection.php";

?>

<!DOCTYPE html>
<html lang="ptbr" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <link rel="shotcut icon" href="assets/img/notas.png">

    <title>Pedidos - ToDo</title>
  </head>
  <body>

      <div class="sidebar bg-light border-left shadow px-4 py-3" id="side">
        <div class="navbar-brand">
          <img src="assets/img/notas.png" width="70" alt="">
          <span class="b-title">
            Pedidos - ToDo
          </span>
        </div>
        <a class="nav-link mt-2" href="index.php"> <i class="fa-solid fa-house"></i> Dashboard</a>
        <a class="nav-link" href="create.php"> <i class="fa-solid fa-circle-plus"></i> Novo pedido</a>
        <a class="nav-link" href="discovery.php"> <i class="fa-solid fa-user-group"></i> Sobre</a>
      </div>

      <label class="lb-close bg-light rounded shadow p-2" for="sidebarToggle"><i class="fa-solid fa-close"></i></label>
      <input type="checkbox" class="butn" id="sidebarToggle"></input>

    <div class="container my-3">
