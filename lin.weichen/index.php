<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Store</title>
	<!-- <link rel="stylesheet" href="css/storetheme.css"> -->
	<?php include "parts/meta.php"?>
</head>

<style type="text/css">
.view-img {
    position: relative;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    height: 80vh;
}
.view-img h5 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 3em;
}

.product-image img{
	width: 100%;
	/*width:100% 指物件會固定大小*/

}
.product-list{
	padding: 1em 0 1.8em 0;
	margin:0;
	border-radius: 0.7em;
	background-color: white;
	box-shadow: 1px 1px 4px rgba(0,0,0,0.2);
	transition:all 0.3s;
	text-align: center;
}
.product-list:hover{
	box-shadow: 1px 1px 12px rgba(0,0,0,0.4);
}
.product-price{
	font-size: 1.2em; 
	padding: 0.2em 0.4em;
}
.product-title{
	font-size: 0.8em;
}

</style>

<body>

	<?php include "parts/navbar.php"?>
	
	<div class="view-img" style="background-image: url(img/view-3.jpg);">
		<h5>Product</h5>
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