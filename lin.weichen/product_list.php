<?php


include_once"lib/php/functions.php";
//any particular page should not include "second", only once;

function makeProductist($r,$o){
return $r. <<<HTML
<div class="col-xs-12 col-md-4">
	<a href="product_item.php?id=$o->id" class="product-item">
		<figure>
			<div class="product-image">
				<img src="images/store/chucky/chucky_3.png">
			</div>
			<figcaption class="product-description">
				<div class="product-price" style="font-size: 1.2em; padding: 0.2em 0.4em;">&dollar;$o->price</div>
				<div class="product-title" style="font-size: 0.8em;">$o->name</div>
			</figcaption>
		</figure>
	</a>
</div>
HTML;
}

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Product List</title>

	<?php include "parts/meta.php"?>
</head>
<body>

	<?php include "parts/navbar.php"?>
	

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<div class="grid gap">
				
				<?php

				//叫出在database設定的所有產品;
					// $conn = makeConn();

					// $result = $conn->query("SELECT *FROM products");
					// if($conn->errno) die($conn->error);

					// while($row = $result->fetch_object()){
					// 	echo "<li>$row->name</li>";
					// }//-->


				//array_reduce()
					//$r: reducing value; $o: current object
				echo array_reduce(
					MYSQLQuery("
						SELECT 
						*FROM products
						ORDER BY date_create DESC
						LIMIT 12
					" ),//Loop MYSQLQuery
					'makeProductist'


					//'makeProducts'等同於以下這些
						// function($r,$o){
						// 	return $r."<li>
						// 	<a href='product_item.php?id=$o->id'>$o->name-&dollars;$o->price</a>
						// 	</li>";
						// }
				);

				?>
		
			

			</div>
		</div>
	</div>

</body>
</html>

