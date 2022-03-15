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

    <link rel="icon" href="assets/img/notas.png">

    <title>Pedidos - ToDo</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img class="d-inline-block align-top" src="assets/img/notas.png" width="40" alt="Logo Pedidos ToDo">
        
      </a>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Novo pedido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>

        </ul>
      </div>


    </nav>

    <div class="container my-3">
