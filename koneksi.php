<?php
$con = mysqli_connect("localhost","root","","frozen_foodS");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>