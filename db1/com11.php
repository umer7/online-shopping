<?php
session_start();
if (! empty($_SESSION['logged_in']))
{
    ?>

	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DATA BASE Project</title>
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
		
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="login/index.php"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="book1.php"><i class="fa fa-star"></i> Home</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="checkout.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
			<li>					
	
</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
	
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
<div class="col-sm-6 col-md-11">
				  <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
				</div>
							</div>
							<div class="item">
							  <div class="col-sm-6 col-md-11">
								  <img src="images/home/girl2.jpg" alt="" width="2000" height="1000" class="girl img-responsive" />
							  </div>
							</div>
							
							<div class="item">
							  <div class="col-sm-6 col-md-11">
								  <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						<div class="col-sm-6 col-md-9">
						  <h1>Laptops and Mobile</h1>
						  <h2>Feel Free to Shop </h2>
						  <p>We provide you a large collection of Books</p>
						  <form action="search.php" method="GET">
		<input type="text" name="query" />
		
		<input type="submit"  class="btn btn-default get" value="Search" />
		
		
	</form>
						  
						 
						  
						  
					  </div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	
	

	<section>
	
		<div class="container">
		
			<div class="row">
			
				<div class="col-sm-3">
					<div class="left-sidebar">
				
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordian" href="#sportswear"> <span class="badge pull-right"><em class="fa fa-plus"></em></span>Computer Mobile</a></h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
										  <li><a href="com11.php">Laptops</a></li>
										  <li><a href="com11.php">Computers</a></li>
										  <li><a href="com11.php">Mobile</a></li>
										  <li><a href="com11.php">Smart phones</a></li>
										  <li><a href="com11.php">Accesories</a></li>
										</ul>
									</div>
								</div>
							</div>
                            <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordian" href="#mens"> <span class="badge pull-right"><em class="fa fa-plus"></em></span>Home and Kitchen</a></h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
										  <li><a href="mov11.php">Home</a></li>
										  <li><a href="mov11.php">Kitchen</a></li>
										
										  <li>&nbsp;</li>
										</ul>
									</div>
								</div>
							</div>
							
                          
                           
							
							<div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordian" href="#womens"> <span class="badge pull-right"><em class="fa fa-plus"></em></span>Electronics</a></h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="ele11.php">Hp</a></li>
											<li><a href="ele11.php">samsung</a></li>
											<li><a href="ele11.php">lg</a></li>
											<li><a href="ele11.php">lenova</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="book1.php"> books</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="book1.php">other item</a></h4>
								</div>
							</div>
							
							
							
							
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Samsung</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Microsoft</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Hp</a></li>
									
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
						
	
					

 <?php
 
$con=mysqli_connect("localhost","root","","db1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM products11 ");



while($row = mysqli_fetch_array($result))
{
	?>
	
<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										
										 <?php 
										 $id= $row['id'];	
	
										$db = mysqli_connect("localhost","root","","db1"); 
										$sql = "SELECT * FROM images where id= $id ";
										$sth = $db->query($sql);
										$result1=mysqli_fetch_array($sth); ?>

 <?php 							echo '<img src="data:image/jpeg;base64,'.base64_encode( $result1['image'] ).'"   width="100" height="178" />';?> 



										
										
									<h2>	<?php echo $row['itemname'];?><h2>
										<p>by  </p>
									<h4>	<?php echo $row['companyName'];?> </h4>
										<p><?php echo $row['description'];?></p>
										
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Addcart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
										 <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result1['image'] ).'"   width="118" height="138" />';?> 
											<br>
											
											<h2> <?php echo $row['price'];	?> PKR </h2>
											<br>
									<p>	<?php echo $row['itemname'];?> </p>
										<br>
										<br>
											<?php		echo	'<a href ="cart12.php?add='.$row['itemid'].'" class="btn btn-default add-to-cart"> <i class="fa fa-shopping-cart"></i>add to cart </a>';?>
										
										</div>
									</div>
								</div>
								
							</div>
						</div>

<?php	
}
mysqli_close($con);
?>
					
						
					</div><!--features_items-->
				
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/c6.png" alt="" width="278" height="228"/>
										<h2>$986</h2>
										<p>Acer R240</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/c5.png" width="278" height="228" />
										<h2>$100</h2>
										<p>Asus vx24</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/c4.png" alt="" width="278" height="228"/>
										<h2>$200</h2>
										<p>Hp 8440</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/c3.png" alt="" width="278" height="228" />
										<h2>$264</h2>
										<p>Asus vx24</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/c2.png" alt="" width="278" height="228" />
										<h2>$156</h2>
										<p>HP pvilion</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/c1.png" alt="" width="278" height="228"/>
											<h2>$256</h2>
											<p>Acer765</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
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
								<li><a href="https://www.facebook.com/UmerFarooq02"><i class="fa fa-facebook"></i> Umer</a></li>
									
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<?php
}
else
{

    echo 'You are not logged in. <a href="http://localhost:81/db1/login/index.php">Click here</a> to log in.';
}
