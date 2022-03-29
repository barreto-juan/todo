<?php

  $setHost = "localhost";
  $setUser = "root";
  $setPass = "";
  $setDB = "todo";

  $getConnection = mysqli_connect($setHost, $setUser, $setPass);

  if (!mysqli_select_db($getConnection, $setDB))
    echo "erro : <pre>" . $getConnection->errno . " -> " . $getConnection->error . "</pre> <br>";
