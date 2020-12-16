<?php

include_once"lib/php/functions.php";
$product = MYSQLIQuery("SELECT*FROM `products` WHERE `id` = ".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Added Product To Cart</title>

	<?php include "parts/meta.php"?>
</head>
<body>
	<?php include "parts/navbar.php"?>
	<div class="container">
		<div class="card soft">
			<h2>Added <?= $product->name ?> To Cart</h2>

			<!-- <?php print_p($_SESSION) ?> -->

			<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>
			
			<div class="display-flex">
				<div class="flex-none">
					<a href="product_list.php" class="form-button">Back to shopping</a>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">
					<a href="product_cart.php" class="form-button">Go to Cart</a>
				</div>
			</div>
			
		</div>
	</div>

</body>
<?php include "parts/footer.php"?>
</html>