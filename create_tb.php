<?php

  $setHost = "localhost";
  $setUser = "root";
  $setPass = "";
  $setDB = "todo";

  $getConnection = mysqli_connect($setHost, $setUser, $setPass);

  if (!mysqli_select_db($getConnection, $setDB))
    echo "erro : <pre>" . $getConnection->errno . " -> " . $getConnection->error . "</pre> <br>";


  $setSQL = "CREATE TABLE IF NOT EXISTS `orders`(
    `id` int(11) not null primary key auto_increment,
    `order` text not null,
    `client` varchar(255) not null,
    `currenttime` timestamp default current_timestamp,
    `time` datetime not null,
    `address` varchar(255) not null,
    `phone` varchar(20) not null,
    `price` float not null,
    `receipt` varchar(20) not null,
    `status` varchar(20) not null,
    `payment` varchar(10) not null
  );";

  $setSQL .= "CREATE TABLE IF NOT EXISTS `login`(
    `id` int(11) not null primary key auto_increment,
    `user` varchar(255) not null,
    `password` varchar(255) not null
  )";



  if ($getConnection->multi_query($setSQL) === FALSE)
    echo "<script> alert(\"erro : " . $getConnection->error . "\") </script>";

  $getConnection->close();
