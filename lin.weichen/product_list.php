<?php

include_once"lib/php/functions.php";
//any particular page should not include "second", only once;
include_once"parts/templates.php";

// include_once "data/api.php";

// if(isset($_GET['t'])){
// 	file_get_json("date/api.php?t={$_GET['t']}")
// };

// setDefault('s','');
// setDefault('orderby_direction','DESC');
// setDefault('orderby','date_create');
// setDefault('limit','12');

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Product List</title>

	<?php include "parts/meta.php"?>
</head>
<body>

	<?php include "parts/navbar.php"?>
	

	<div class="container">
			<form action="product_list.php" method="get" class="hotdog">
			    <input type="hidden" name="t" value="search">
			    <input type="search" name="s" placeholder="Search for a product" value="<?= @$_GET['s'] ?>">
			</form>

			<div class="title">
				<h2>Product List</h2>
			</div>
			<hr>

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
					MYSQLIQuery("
						SELECT 
						*FROM products
						ORDER BY date_create DESC
						LIMIT 12
					" ),//Loop MYSQLQuery
					'makeProductList'


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
<?php include "parts/footer.php"?>
</html>

