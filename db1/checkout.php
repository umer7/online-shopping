<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
      
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
							  <li><a href="#"><em class="fa fa-phone"></em> +03328207091</a></li>
							  <li><a href="#"><em class="fa fa-envelope"></em> k142229@nu.edu.pk</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/UmerFarooq02"><i class="fa fa-facebook"></i></a></li>
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="login/index.php"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="book1.php"><i class="fa fa-star"></i> home</a></li>
								
								
								<li><a href="login44a/index.php"><i class="fa fa-lock"></i> Login</a></li>
			
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header><!--/header-->
	
	
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


	

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Checkout</h2>
			</div>
			<div class="checkout-options">
				<h3>Dear User</h3>
				<p>be sure you add all the desire products in check out</p>
				
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>As you are register member you must Checkout to easily get access to your order,</p>
			</div><!--/register-req-->

			
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"> Review</td>
							<td class="price">Price</td>
							
							<td class="quantity">Discount</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					
					
 <?php
 echo "<h1>Products </h1>";
$con=mysqli_connect("localhost","root","","db1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM cart ");


while($row = mysqli_fetch_array($result))
{
	?>
					
					<tbody>
						<tr>
							
							<td class="cart_description">
								<h4><a href=""><?php echo $row['itemname'];?></a></h4>
								
								<p><?php echo $row['itemType'];?></p>
								<p><?php echo $row['description'];?></p>
								<p><?php echo $row['companyName'];?></p>
								
							</td>
							<td class="cart_price">
								<p><?php echo $row['reviews'];?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $row['price'];?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $row['Discount'];?></p>
							</td>
							
							<td class="cart_total">
								<p class="cart_total_price"></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $row['price'];?></p>
							</td>
		<td>					
			<?php		echo	'<a href ="addone.php?add='.$row['itemid'].'" class="btn btn-default add-to-cart"> add one more </a>';?>
		 </td>
								
<?php
	}
mysqli_close($con);
?>
						</tr>

					
					</tbody>
				</table>
				
				<h4>Subtotal
				
				<?php
				$con=mysqli_connect("localhost","root","","db1");
				$result11 = mysqli_query($con,"select sum(price) from cart");		
				
	while ($row = $result11->fetch_assoc()) {
    echo $row['sum(price)']."<br>";
}		

?></h4>
<h4>Total saving
<?php
$result12 = mysqli_query($con,"select sum(Discount) from cart");		
$row = mysqli_fetch_assoc($result12);
echo $row['sum(Discount)']."<br>";
	?>	
	</h4>
<h3>Total
<br><p class="cart_total_price">
<?php

$result13 = mysqli_query($con,"select sum(price)-sum(Discount) from cart");		
$row = mysqli_fetch_assoc($result13);
echo $row['sum(price)-sum(Discount)']."<br>";
				
				
				mysqli_close($con);
				?>
			</p></h3>	
				
				
				<form action="remove.php" method="POST">

<button type="submit" class="btn btn-default get" >Check out</button>
</form>
			</div>
			
		</div>
		
		
	</section> <!--/#cart_items-->


	


