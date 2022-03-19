<?php
  require_once 'connection.php';

  function createOrder($nome, $desc, $prazo, $end, $tel, $valor, $receb, $situacao, $pag){
    global $con;
    $query = "INSERT INTO orders(`order`, `client`, `time`, `address`, `phone`, `price`, `receipt`, `status`, `payment`) VALUES(\"$desc\", \"$nome\", \"$prazo\", \"$end\", \"$tel\", \"$valor\", \"$receb\", \"$situacao\", \"$pag\");";
    $sql = $con->query($query) or die($con->error);

    return $sql;

  }


  function returnOrder(){
    global $con;
    $query = "SELECT * FROM `orders` WHERE 1";
    $sql = $con->query($query) or die($con->error);

    return $sql;

  }

  function searchOrder($id){
    global $con;
    $query = "SELECT * FROM `orders` WHERE id=$id";
    $sql = $con->query($query) or die($con->error);

    return $sql;
    
  }

  function updateOrder($id, $nome, $desc, $prazo, $end, $tel, $valor, $receb, $situacao, $pag){
    global $con;
    $query = "UPDATE `orders` SET `order`=\"$desc\",`client`=\"$nome\", `time`=\"$prazo\",`address`=\"$end\",`phone`=\"$tel\",`price`=\"$valor\",`receipt`=\"$receb\",`status`=\"$situacao\",`payment`=\"$pag\" WHERE `id`=$id";
    $sql = $con->query($query) or die($con->error);

    return $sql;

  }


  function deleteOrder($id){
    global $con;
    $query = "DELETE FROM `orders` WHERE `id`=$id";
    $sql = $con->query($query) or die($con->error);

    return $sql;
  }