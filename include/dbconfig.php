<?php
$con = mysqli_connect("localhost","root","","trimesma_trimes");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>