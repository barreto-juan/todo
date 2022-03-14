<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "todo";

  $con = mysqli_connect($host, $user, $pass);

  if (!mysqli_select_db($con, $db))
    echo "erro : <pre>" . $con->errno . " -> " . $con->error . "</pre> <br>";

  $sql = "CREATE TABLE IF NOT EXISTS `demands`(
    `id` int(11) not null primary key auto_increment,
    `demand` text not null,
    `client` varchar(255) not null,
    `currenttime` timestamp default current_timestamp,
    `time` date not null,
    `address` text not null,
    `price` float not null,
    `receipt` varchar(20) not null,
    `status` varchar(20) not null
  );";



  if ($con->query($sql) === FALSE)
    echo "<script> alert(\"erro " . $con->error . "\") </script>";


  $con->close();
