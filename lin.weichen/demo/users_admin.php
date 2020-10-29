<?php

include "../lib/php/functions.php";

$users = file_get_json("users.json");


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>


	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<!-- nav.nav.flex-none>ul>li>a[href=#]>{List}  -->
			<nav class="nav flex-none">
				<ul>
					<li><a href="#">List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<h2>User List</h2>
			<?php 

			for($i=0; $i<count($users); $i++){
				echo "<li>
				{$users[$i]->name}
				</li>";
			}

			?>
		</div>
	</div>
</body>
</html>