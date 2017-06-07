<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql="SELECT * FROM user1 WHERE username='$uid' AND password='$pwd'";
$result=mysqli_query($conn,$sql);

if(!mysqli_fetch_assoc($result))
{echo "incorrect information<br>";
echo"please give valid ID and password<br>";

}
else {
	 $_SESSION['logged_in'] = true;
header("Location: http://localhost:81/db1/com11.php");

}

?>
}