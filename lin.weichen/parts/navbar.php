<header class="navbar" id="home" style="margin-bottom:0;">
	<div class="container display-flex flex-align-center">
		<!-- <div class="flex-none"><h1><a href="index.php">DD SHOP</a></h1></div> -->
		<div class="navbar-logo flex-none"><a href="index.php"><img src="images/logo.png" style=";"></a></h1></div>
		
		<div class="flex-stretch"></div>

		<nav class="nav flex-none">
			<ul class="display-flex">
				<li><a href="index.php/#home">Home</a></li>
				<li><a href="index.php/#about">About</a></li>
				<li><a href="product_list.php">Products</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge() ?></span>
				</a></li>
				<!-- <li><a href="">Contact</a></li> -->
			</ul>
			
		</nav>

	
	</div>
</header>
