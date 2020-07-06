<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jiniic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  echo "<script>window.location.assign('../index.html?err=connection_problem');</script>";
}


?>
