<?php

include_once"lib/php/functions.php";
include_once"parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Store</title>
	<!-- <link rel="stylesheet" href="css/storetheme.css"> -->
	<?php include "parts/meta.php"?>
</head>


<body>

	<?php include "parts/navbar.php"?>
	
	
	<div class="view-img" style="background-image: url(images/main.jpg);">
		<h5></h5>
	</div>
	<!-- <div class="container">
		<div class="card soft">
			<h2>Welcome to the Store</h2>
		</div>
		
	</div> -->

	<div class="container">
		<div class="title">
			<h2>Category</h2>
		</div>
		<hr>
		<div class="grid gap">

			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=2">
					<figure class="product-list">
						<div class="product-image">
							<img src="images/store/DB_GK_Vol.5_1.jpg">
						</div>
						
						<figcaption class="product-description">
							<div class="product-price" style="color: var(--color-navbar);">$71.90</div>
							<div class="product-title" >GK Son Gohan Vol.4</div>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=8">
					<figure class="product-list">
						<div class="product-image">
							<img src="images/store/OP_GK_Vol.2_1.jpg">
						</div>
						
						<figcaption class="product-description">
							<div class="product-price" style="color: var(--color-navbar);">$88.25</div>
							<div class="product-title" >WCF Roronoa Zoro Vol.4</div>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=13">
					<figure class="product-list">
						<div class="product-image">
							<img src="images/store/chucky_1.jpg">
						</div>
						
						<figcaption class="product-description">
							<div class="product-price" style="color: var(--color-navbar);">$14.99</div>
							<div class="product-title" >Chucky</div>
						</figcaption>
					</figure>
				</a>
			</div>

		</div>
	</div>

	<div class="container">
		<div class="title">
			<h2>Popular Products</h2>
		</div>
		<hr>
		<div class="grid gap">
			<div class="col-xs-12 col-md-3">
				<a href="product_item.php?id=5">
					<figure class="product-list">
						<div class="product-image">
							<img src="images/store/DB_POP_Vol.4_1.jpg">
						</div>
						
						<figcaption class="product-description">
							<div class="product-price" style="color: var(--color-navbar);">$74.89</div>
							<div class="product-title" >P.O.P Furiza Vol.3</div>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="col-xs-12 col-md-3">
				<a href="product_item.php?id=4">
					<figure class="product-list">
						<div class="product-image">
							<img src="images/store/DB_WCF_Vol.2_1.jpg">
						</div>
						
						<figcaption class="product-description">
							<div class="product-price" style="color: var(--color-navbar);">$27.55</div>
							<div class="product-title" >WCF Master Roshi Vol.2</div>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="col-xs-12 col-md-3">
				<a href="product_item.php?id=11">
					<figure class="product-list">
						<div class="product-image">
							<img src="images/store/OP_POP_Vol.5_1.jpg">
						</div>
						
						<figcaption class="product-description">
							<div class="product-price" style="color: var(--color-navbar);">$110.98</div>
							<div class="product-title" >P.O.P Crocodile Vol.7</div>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="col-xs-12 col-md-3">
				<a href="product_item.php?id=14">
					<figure class="product-list">
						<div class="product-image">
							<img src="images/store/potato.jpg">
						</div>
						
						<figcaption class="product-description">
							<div class="product-price" style="color: var(--color-navbar);">$25</div>
							<div class="product-title" >Mr.Potato Head</div>
						</figcaption>
					</figure>
				</a>
			</div>
			
		</div>
		<div class="title" style="margin: 20px 0;">
			<a href="product_list.php">
				View More >>
			</a>
		</div>
	</div>
	<!-- <div class="view-img" style="background-image: url(images/main.jpg);">
		<h5></h5>
	</div> -->
</body>
<?php include "parts/footer.php"?>
</html>