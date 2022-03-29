<?php
  
  require_once 'connection.php';



  function createOrder($getName, $getOrder, $getTime, $getAddress, $getPhone, $getPrice, $getReceipt, $getStatus, $getPayment){
    global $getConnection;
    $setQuery = "INSERT INTO orders(`order`, `client`, `time`, `address`, `phone`, `price`, `receipt`, `status`, `payment`) VALUES(\"$getOrder\", \"$getName\", \"$getTime\", \"$getAddress\", \"$getPhone\", \"$getPrice\", \"$getReceipt\", \"$getStatus\", \"$getPayment\");";

    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;

  }




  function returnOrder(){
    global $getConnection;
    $setQuery = "SELECT * FROM `orders` WHERE 1";
    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;

  }

  function searchOrder($getIdOrder){
    global $getConnection;
    $setQuery = "SELECT * FROM `orders` WHERE id=$getIdOrder";
    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;
    
  }

  function updateOrder($getIdOrder, $getName, $getOrder, $getTime, $getAddress, $getPhone, $getPrice, $receb, $getStatus, $getPayment){
    global $getConnection;
    $setQuery = "UPDATE `orders` SET `order`=\"$getOrder\",`client`=\"$getName\", `time`=\"$getTime\",`address`=\"$getAddress\",`phone`=\"$getPhone\",`price`=\"$getPrice\",`receipt`=\"$receb\",`status`=\"$getStatus\",`payment`=\"$getPayment\" WHERE `id`=$getIdOrder";
    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;

  }


  function deleteOrder($getIdOrder){
    global $getConnection;
    $setQuery = "DELETE FROM `orders` WHERE `id`=$getIdOrder";
    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;

  }