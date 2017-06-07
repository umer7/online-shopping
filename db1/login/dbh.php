<?php
 $conn = mysqli_connect("localhost", "root", "", "db1");
 if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
 }
?>