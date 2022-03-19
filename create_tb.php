<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "todo";

  $con = mysqli_connect($host, $user, $pass);

  if (!mysqli_select_db($con, $db))
    echo "erro : <pre>" . $con->errno . " -> " . $con->error . "</pre> <br>";

  $sql = "CREATE TABLE IF NOT EXISTS `orders`(
    `id` int(11) not null primary key auto_increment,
    `order` text not null,
    `client` varchar(255) not null,
    `currenttime` timestamp default current_timestamp,
    `time` datetime not null,
    `address` text not null,
    `phone` varchar(20) not null,
    `price` float not null,
    `receipt` varchar(20) not null,
    `status` varchar(20) not null,
    `payment` varchar(10) not null
  );";



  if ($con->query($sql) === FALSE)
    echo "<script> alert(\"erro " . $con->error . "\") </script>";


  $con->close();
