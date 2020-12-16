<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// $cart = MYSQLIquery("SELECT * FROM products WHERE id in(1,2,4)");

$cart = getCartItems();

// print_p($cart);



?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Cart</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>


	<div class="container" style="margin-top: 20px; ">
		<div class="grid gap">
			<div class="col-xs-12 col-md-12">
				<div class="card soft">
		        	<h2 style="text-align: center;">Product Cart</h2>
		        	<hr>
		        	<?

		       		echo array_reduce($cart,'makeCartList');

		       		?>
	    		</div>
			</div>
			<div class="col-xs-12 col-md-12">
				<div class="card soft flat">
					<div class="card-section">
						<h2 style="text-align: center;">Totals</h2>
						<hr>
					</div>
					<?= cartTotals()?>
				</div>
			</div>
		</div>
	</div>

</body>
<?php include "parts/footer.php"?>
</html>