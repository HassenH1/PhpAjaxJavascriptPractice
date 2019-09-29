<?php
  $server = "localhost";
  $user = "root";
  $password = "hassensaid12";
  $dbName = "test";

  $conn = mysqli_connect($server, $user, $password, $dbName);

  if(!$conn){
    echo "failed";
  }
 ?>
