<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "todo";

  $con = mysqli_connect($host, $user, $pass);

  if (!mysqli_select_db($con, $db))
    echo "erro : <pre>" . $con->errno . " -> " . $con->error . "</pre> <br>";

  $sql = "CREATE DATABASE IF NOT EXISTS todo";
  if ($con->query($sql) === FALSE)
    echo "<script> alert(\"erro " . $con->error . "\") </script>";


  $con->close();
