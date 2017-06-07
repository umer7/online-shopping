<?php
 
 $conn = mysqli_connect("localhost", "root", "", "db1");
 if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
 }

 ?>
 


 
<?php
include 'dbh.php';





//$itemid = $_POST['itemid'];
//$sql= " INSERT INTO cart12 SELECT * FROM products11 WHERE itemid=$itemid;";
//$result=mysqli_query($conn,$sql);
//header("Location: book1.php");





if (isset($_GET['add']))
{
$itemid  =$_GET ['add'];
//$sql = INSERT INTO cart  Values ($price);
$sql= " INSERT INTO cart SELECT * FROM products11 WHERE itemid=$itemid;";
$conn->query($sql);

$sql1= " INSERT INTO cart SELECT * FROM book WHERE itemid=$itemid;";
$conn->query($sql1);

$sql2= " INSERT INTO cart SELECT * FROM electronics WHERE itemid=$itemid;";
$conn->query($sql2);

$sql3= " INSERT INTO cart SELECT * FROM home WHERE itemid=$itemid;";
$conn->query($sql3);
header("Location: com11.php");
}

?>
