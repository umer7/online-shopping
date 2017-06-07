<?php
 
 $conn = mysqli_connect("localhost", "root", "", "logintest");
 if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
 }

 ?>
 


 
<?php
include 'dbh.php';





$itemid = $_POST['itemid'];
$sql= " INSERT INTO cart SELECT * FROM products11 WHERE itemid=$itemid;";
$result=mysqli_query($conn,$sql);
header("Location: book1.php");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Image</title>
    <script src="jquery-2.1.3.js"></script>
</head>
<body>
<input type="text" id="imageid" /><button>View Image</button>

<image id="img"/>
<script>
    $('#img').hide();
    $('button').click(function(){
        $('#img').attr("src","getImage.php?id="+$('#imageid').val());
        $('#img').show();
    });
</script>
</body>
</html>
