<?php
  require_once 'connection.php';

  function createDemand($nome, $desc, $prazo, $end, $valor, $receb, $situacao){
    global $con;
    $query = "INSERT INTO demands(`demand`, `client`, `time`, `address`, `price`, `receipt`, `status`) VALUES(\"$desc\", \"$nome\", \"$prazo\", \"$end\", \"$valor\", \"$receb\", \"$situacao\");";
    $sql = $con->query($query) or die($con->error);

    return $sql;

  }


  function returnDemand(){
    global $con;
    $query = "SELECT * FROM `demands` WHERE 1";
    $sql = $con->query($query) or die($con->error);

    return $sql;

  }

  function searchDemand($id){
    global $con;
    $query = "SELECT * FROM `demands` WHERE id=$id";
    $sql = $con->query($query) or die($con->error);

    return $sql;
    
  }

  function updateDemand($id, $nome, $desc, $prazo, $end, $valor, $receb, $situacao){
    global $con;
    $query = "UPDATE `demands` SET `demand`=\"$desc\",`client`=\"$nome\", `time`=\"$prazo\",`address`=\"$end\",`price`=\"$valor\",`receipt`=\"$receb\",`status`=\"$situacao\" WHERE `id`=$id";
    $sql = $con->query($query) or die($con->error);

    return $sql;

  }
