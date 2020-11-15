<?php

include_once"lib/php/functions.php";

$product = MYSQLQuery("SELECT *FROM products WHERE id = {$_GET['id']}")[0];

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Product Item</title>

	<?php include "parts/meta.php"?>
</head>
<body>
	<?php include "parts/navbar.php"?>
	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="image-main"></div>
					<div class="image-thumbs">
						<img src="<?=$product->image_thumb?>"alt="">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<h2><? ?></h2>
				</div>
			</div>
		</div>
		<div class="card soft">
			<h2>Product Item</h2>

				
			<!-- <div>This is the product #<?= $_GET['id'] ?></div> -->
			<div><a href="added_to_cart.php">Add To Cart</a></div>
			
		</div>
		
	</div>

</body>
</html>