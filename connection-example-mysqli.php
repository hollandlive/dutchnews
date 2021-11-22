<?php

// Create connection

$user = "root";
$pass = "";
$servername ="localhost";

$connection = new mysqli($servername, $user, $pass);

    // Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected";

/* $sql = "CREATE DATABASE dutchnews"; 

  if($connection->query($sql)===TRUE) {
      echo "database created";
  } else {
      echo "database query failed";
  }
 
$sql = 1;


echo $sql; */

?>
