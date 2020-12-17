<?php

include_once"lib/php/functions.php";
include_once"parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Store</title>
	<!-- <link rel="stylesheet" href="css/storetheme.css"> -->
	<?php include "parts/meta.php"?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>

	<?php include "parts/navbar.php"?>


	<div class="view-img" style="background-image: url(images/window-2.jpg); height:75vh">
		<div class="top-content">
			<!-- <h2 class="title" style="text-align: center;">DD's Shop</h2> -->
			<div class="viewer-logo"><img src="images/logo.png" style="vertical-align : middle; width: 100%;"></div>
			<a href="product_list.php" class="top-btn">Order Now</a>	
		</div>
	</div>

	<div class="container" id="about" style="background-color: white;">
		<h2 style="text-align: center;">About Us</h2>
		<hr>
		<div class="grid gap">
			<div class="col-sm-12 col-md-6">
				<div class="mid-content">
					<h4>"Toys are not just playthings that bring happiness to childhood,
					they also can entrust emotions."</h4>
					<p>I love to collect toys and models from television, such as animation and movies which their value is classic and representative. </p>
					<p>Therefore, I want to set up websites related to toys and models to attract more customers who have the same emotions on toys and models.</p>
					<br>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="mid-img">
					<img src="images/bottom-img.jpg">
				</div>
			</div>
		</div>
	</div>

	<!-- <section class="about" id="about">
		<div class="grid gap" style="justify-content: space-between;">
			<div class="col-sm-12 col-md-6">
				<div class="mid-content">
					<h2>About Us</h2>
					<p>I love to collect toys and models from works such as animation and movies because their value is classic and representative. </p>
					<p>Therefore, I want to set up websites related to toys and models to attract more customers who have the same feelings for toys.</p>
					<br>
					
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				
			</div>
		</div>
	</section> -->
	


	

	<!-- <div class="view-img" style="background-image: url(images/main.jpg);"></div> -->
	
	
	<!-- <div class="container">
		<div class="card soft">
			<h2>Welcome to the Store</h2>
		</div>
		
	</div> -->

	<?php include "parts/category.php"?>

	<!-- <div class="container">
		<h2>New Models</h2>

		<?php recommendCategory('model') ;?>
	</div> -->


	<?php include "parts/popular.php"?>

	
	<!-- <div class="view-img" style="background-image: url(images/main.jpg);">
		<h5></h5>
	</div> -->
	
</body>
<?php include "parts/footer.php"?>
</html>