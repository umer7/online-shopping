


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Search</title>
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
								<li><a href="login44a/index.php"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="book1.php"><i class="fa fa-star"></i> home</a></li>
								
								
								<li><a href="login/index.php"><i class="fa fa-lock"></i> Login</a></li>
			
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


	
 
<?php

 
 $conn = mysqli_connect("localhost", "root", "", "db1");
 if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
 }

 
?>

<!DOCTYPE html ">
<html >
<head>
	<title>Search results</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="table-responsive cart_info">
				<table class="table table-condensed">
				
<?php
	$query = $_GET['query']; 
	// gets value sent over search form
	
	$min_length = 1;	
	if(strlen($query) >= $min_length){ 
		$query = htmlspecialchars($query); 
//		$query = mysql_real_escape_string($query);
		// makes sure nobody uses SQL injection
		//$result = mysqli_query($con,"SELECT * FROM book ");
		
		$raw_results = mysqli_query($conn,"SELECT * FROM products11
			WHERE (`itemname` LIKE '%".$query."%') OR (`companyname` LIKE '%".$query."%') OR (`itemid` LIKE '%".$query."%') OR (`description` LIKE '%".$query."%')") or die(mysql_error());
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
		
				echo "<p>Item name <h3>".$results['itemname']."</h3>".$results['companyName']." is Company name<br>" .$results['itemid']." is  the id" .$results['description']." Description</p>";			
			}
		}
		else{ 
			//echo "No results";
		}
		$raw_results = mysqli_query($conn,"SELECT * FROM home
			WHERE (`itemname` LIKE '%".$query."%') OR (`companyname` LIKE '%".$query."%') OR (`itemid` LIKE '%".$query."%') OR (`description` LIKE '%".$query."%')") or die(mysql_error());
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
		
				echo "<p>Item name <h3>".$results['itemname']."</h3>".$results['companyName']." is Company name<br>" .$results['itemid']." is  the id" .$results['description']." Description</p>";			
			}
		}
		else{ 
			//echo "No results";
		}
		$raw_results = mysqli_query($conn,"SELECT * FROM electronics
			WHERE (`itemname` LIKE '%".$query."%') OR (`companyname` LIKE '%".$query."%') OR (`itemid` LIKE '%".$query."%') OR (`description` LIKE '%".$query."%')") or die(mysql_error());
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
		
				echo "<p>Item name <h3>".$results['itemname']."</h3>".$results['companyName']." is Company name<br>" .$results['itemid']." is  the id" .$results['description']." Description</p>";			
			}
		}
		else{ 
			///echo ;
		}
		$raw_results = mysqli_query($conn,"SELECT * FROM book
			WHERE (`itemname` LIKE '%".$query."%') OR (`companyname` LIKE '%".$query."%') OR (`itemid` LIKE '%".$query."%') OR (`description` LIKE '%".$query."%')") or die(mysql_error());
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
		
				echo "<p>Item name <h3>".$results['itemname']."</h3>".$results['companyName']." is Company name<br>" .$results['itemid']." is  the id" .$results['description']." Description</p>";			
			}
		}
		else{ 
			//echo ;
		}
		
	}
	else{
		echo "Minimum length is ".$min_length;
	}
?>
</div>
</table>
</body>
</html>
