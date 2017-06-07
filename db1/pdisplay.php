<head>
	<title>Admin page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<?php
echo "<h1>item in carts </h1>";
$con=mysqli_connect("localhost","root","","db1");
// Check connection
if (mysqli_connect_errno())
{ echo "Failed to connect to MySQL: " . mysqli_connect_error();  }
$result = mysqli_query($con,"SELECT * FROM products11 ");
while($row = mysqli_fetch_array($result))
{
echo  $row['itemid'] ;
echo $row['itemname'] ;
echo  $row['price'] ;
echo $row['description'] ;
echo $row['reviews'] ;
echo $row['itemType'];
echo $row['companyName'];
echo $row['rating'];
echo $row['Discount'];

}
mysqli_close($con);
?>


 <?php
 echo "<h1>you may also like </h1>";
$con=mysqli_connect("localhost","root","","db1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM products11 ");

echo "<table border='4'>
<tr>
<th> item id </th>
<th> name</th>
<th> Type</th>
<th> Company</th>
<th> rating</th>
<th> Price</th>
<th>Description</th>
<th>review</th>
<th>buy </th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['itemid'] . "</td>";
echo "<td>" . $row['itemname'] . "</td>";
echo "<td>" . $row['itemType'] . "</td>";
echo "<td>" . $row['companyName'] . "</td>";
echo "<td>" . $row['Discount'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['reviews'] . "</td>";
			echo	'<td><a href ="cart12.php?add='.$row['itemid'].'" class="btn btn-default add-to-cart"> <i class="fa fa-shopping-cart"></i>add to cart </a> <td>';



echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<html>
<form action="remove.php" method="POST">

<button type="submit">Check out</button>
</form>

<body>
	<form action="search.php" method="GET">
		<input type="text" name="query" />
		<input type="submit" value="Search" />
	</form>
</body>
</html>

<html>

<h1> Check out account</h1>

<body>

<h3>Add the item</h3>

<br><br>
<form action="product.php" method="POST">
<input type="text" name ="name" placeholder="name" > 
<input type="text" name ="type" placeholder="type" > 
<input type="text" name ="company" placeholder="company" > 

<input type="text" name ="rating" placeholder="rating" ><br> 
<input type="text" name ="price" placeholder="price" > 
<input type="text" name ="description" placeholder="Description" > 
<input type="text" name ="discount" placeholder="discount" >
<input type="text" name ="reviews" placeholder="reviews" ><br>


<button type="submit">Add the item </button>

</form>
<h2>CART</h2>
<form action="cart.php" method="POST">
<input type="text" name ="itemid" placeholder="itemid" > 

<button type="submit">Add to cart </button>
</form>

</body>

</html>
