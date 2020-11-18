<?php

include_once"lib/php/functions.php";
//[0]:first item
//$product: object, not array;
$product = MYSQLQuery("SELECT *FROM products WHERE id = {$_GET['id']}")[0];
//$thumbs: array
$thumbs = explode(",",$product->image_thumb);

$thumbs_elements = array_reduce($thumbs,function($r,$o){return $r."<img src='$o->image_thumb'>";
});

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Store:<?= $product->name ?></title>

	<?php include "parts/meta.php"?>
</head>
<body>
	<?php include "parts/navbar.php"?>
	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="image-main">
						<img src="images/store/chucky/chucky_3.png">
						<!-- <?= $product->image_thumb ?> -->
					</div>
					<div class="image-thumbs">
						<img src="images/store/chucky/chucky_1.png">
						<img src="images/store/chucky/chucky_2.png">
						<!-- <?= $thumbs_elments ?> -->
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<h2><?= $product->name ?></h2>
					<div><?= $product->price ?></div>
					<div><a href="added_to_cart.php">Add To Cart</a></div>
				</div>
			</div>
		</div>
		

				<!-- <?php

				// echo array_reduce(
				// 	MYSQLQuery("SELECT *FROM products WHERE id = {$_GET['id']}"),//SELECT all column(*),FROM products tables,WHERE id column equals value in the URL;
					
				// 	function($r,$o){
				// 		return $r."<div>$o->name</a></div>";
				// 	}
				// );


				?> -->
				
			<!-- <div>This is the product #<?= $_GET['id'] ?></div> -->
			
			
		
	</div>

</body>
</html>