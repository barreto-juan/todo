<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "todo";

  $con = mysqli_connect($host, $user, $pass);

  if (!mysqli_select_db($con, $db))
    echo "erro : <pre>" . $con->errno . " -> " . $con->error . "</pre> <br>";
