<div class="container">
	<h2 style="text-align: center;">Popular Products</h2>
	<hr>
		
	<div class="grid gap">
		
		<?php

        echo array_reduce(
           MYSQLIQuery("
              SELECT *
              FROM products
              ORDER BY price DESC
              LIMIT 3
           "),
           'makeProductList'
        );

    	?>
	</div>
	<div class="title" style="margin: 20px 0; text-align: center;">
		<a href="product_list.php">
			View More >>
		</a>
	</div>
</div>