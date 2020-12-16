<?php

include_once"lib/php/functions.php";
include_once "parts/templates.php";

// $product = MYSQLIQuery("SELECT *FROM products WHERE id = {$_GET['id']}")[0];

// $thumbs = explode(",",$product->image_other);

// $thumbs_elements = array_reduce($thumbs,function($r,$o){return $r."<img src='images/store/$o'>";
// });


?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Thanks for Purchasing</title>

	<?php include "parts/meta.php"?>
</head>
<body>
	<?php include "parts/navbar.php"?>
	

	<div class="container">
		<div class="card soft" style="text-align: center;">
			<h1 style="text-align: center;">Thanks for Purchasing!</h1>
			<p>The shipment will take five to seven days, thank you for your patience.</p>

			<a href="product_list.php" class="top-btn">Back to Shop</a>
			
		</div>

		<div class="title">
			<h2 style="text-align: center;">Popular Products</h2>
			<hr>
		</div>

			<div class="grid gap">

				<?php

				echo array_reduce(
					MYSQLIQuery("
						SELECT *
						FROM products
						WHERE id in (4,7,13)
					" ),//Loop MYSQLQuery
					'makeProductList'
				);

				?>
				
			</div>

	</div>
</body>
<?php include "parts/footer.php"?>
</html>