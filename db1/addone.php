<?php
 
 $conn = mysqli_connect("localhost", "root", "", "db1");
 if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
 }

 ?>
 


 
<?php
include 'dbh.php';






if (isset($_GET['add']))
{
$itemid  =$_GET ['add'];
//$sql = INSERT INTO cart  Values ($price);
$sql= " INSERT INTO cart SELECT * FROM cart WHERE itemid=$itemid;";


$conn->query($sql);
header("Location: checkout.php");
}






?>
