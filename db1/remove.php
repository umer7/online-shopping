<?php
 
 $conn = mysqli_connect("localhost", "root", "", "db1");
 if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
 }

 ?>
 <?php
 $sql1 = "SELECT email FROM `user1`";
$to      = $sql1 ;
$subject = 'Order Receipt';
$message = 'Dear umer farooq, 
your order is verified 
Thank you for your order. 
';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

 <?php
include 'dbh.php';






$sql= "DELETE FROM `cart`";
$result=mysqli_query($conn,$sql);





header("Location: checkout.php");
?>

