<?php
 
 $conn = mysqli_connect("localhost", "root", "", "logintest");
 if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
 }

 ?>
 
 
<?php

include 'dbh.php';
$name = $_POST['name'];
$type = $_POST['type'];
$company = $_POST['company'];
$rating = $_POST['rating'];
$price = $_POST['price'];
$description = $_POST['description'];
$discount = $_POST['discount'];
$reviews = $_POST['reviews'];


$sql ="INSERT INTO products11 (itemname,itemType,companyName,rating,price,description,Discount,reviews)
 VALUES('$name','$type','$company','$rating','$price','$description','$discount','$reviews')";
$result=mysqli_query($conn,$sql);
header("Location: pdisplay.php");
