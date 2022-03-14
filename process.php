<?php
  require_once 'connection.php';

  function createDemand($nome, $desc, $prazo, $end, $valor, $receb, $situacao){
    global $con;
    $query = "INSERT INTO demands(`demand`, `client`, `time`, `address`, `price`, `receipt`, `status`) VALUES(\"$desc\", \"$nome\", \"$prazo\", \"$end\", \"$valor\", \"$receb\", \"$situacao\");";
    $sql = $con->query($query) or die($con->error);

    return $sql;

  }
