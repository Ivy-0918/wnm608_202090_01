<!DOCTYPE html>
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
	<div class="container">
		<div class="card soft">
			<h2>Welcome to the Store</h2>
		</div>
		
	</div>

	<div class="container">
		<h2>Category</h2>

			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<a href="#">
						<figure class="product-list">
							<div class="product-image">
								<img src="styleguide/img/model-2.png">
							</div>
							
							<figcaption class="product-description">
								<div class="product-price" style="color: var(--color-navbar);">$Price</div>
								<div class="product-title" >Product Name</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href="#">
						<figure class="product-list">
							<div class="product-image">
								<img src="styleguide/img/model-3.png">
							</div>
							
							<figcaption class="product-description">
								<div class="product-price" style="color: var(--color-navbar);">$Price</div>
								<div class="product-title" >Product Name</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href="#">
						<figure class="product-list">
							<div class="product-image">
								<img src="styleguide/img/model-4.png">
							</div>
							
							<figcaption class="product-description">
								<div class="product-price" style="color: var(--color-navbar);">$Price</div>
								<div class="product-title" >Product Name</div>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
	</div>

</body>
</html>