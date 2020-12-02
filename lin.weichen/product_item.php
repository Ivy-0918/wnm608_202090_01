<?php

include_once"lib/php/functions.php";
include_once "parts/templates.php";
//[0]:first item
//$product: object, not array;
$product = MYSQLIQuery("SELECT *FROM products WHERE id = {$_GET['id']}")[0];
//$thumbs: array
$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){return $r."<img src='images/store/$o'>";
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
						<img src="images/store/<?= $product->image_thumb ?>">
						<!-- <?= $product->image_thumb ?> -->
					</div>
					<div class="image-thumbs">
                  		<?= $thumbs_elements ?>
               		</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="post" action="product_actions.php?action=add-to-cart">
					<!-- hidden producID -->
					<input type="hidden" name="product-id" value="<?= $product->id ?>">
					<div class="card-section">
						<h2><?= $product->name ?></h2>
						<div>&dollar;<?= $product->price ?></div>
					</div>
					<div class="card-section">
						<div class="form-control">
							<label for="product-amount" class="form-label">Amount</label>
							<div class="form-select">
								<select name="product-amount" id="product-amount">
									<!-- option[value=$]*10{$} -->
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</div>
						</div>
						<div class="form-control">
							<label for="product-color" class="form-label">Amount</label>
							<div class="form-select">
								<select name="product-color" id="product-color">
									<option value="red">Red</option>
									<option value="blue">Blue</option>
									<option value="green">Green</option>
								</select>
							</div>
						</div>

						<div class="form-control">
							<input type="submit" class="form-button" value="Add To Cart">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="card soft medium">
			<p><?= $product->description ?></p>
		</div>


			<div class="title">
				<h2>Related Products</h2>
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
<?php include "parts/footer.php"?>
</html>