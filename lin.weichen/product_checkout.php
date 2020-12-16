<?php

include_once"lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Product Checkout</title>

	<?php include "parts/meta.php"?>
</head>
<body>
	<?php include "parts/navbar.php"?>
	

	<div class="container">
		<div class="card soft">
			<h2 style="text-align: center;">Product Checkout</h2>
			<hr>

			<div class="grid gap">
				<div class="col-xs-12 col-md-8">
					<form>
				
				
					<h3>Shipping Info</h3>
					
						
						<div class="form-control">
							<label for="name" class="form-label">Name</label>
							
								<div class="display-flex">
									
									<input id="first-name" type="text" class="hotdog hotdog-ex" placeholder="First Name">
									
									
									<input id="last-name" type="text" class="hotdog hotdog-ex" placeholder="Last Name" >
								</div>
								
						</div>
						
				
						<div class="form-select">
							<label for="conutry" class="form-label">Country</label>
							<select>
								<option>Australia</option>
								<option>Brazil</option>
								<option>China</option>
								<option>Dominica</option>
								<option>Egypt</option>
								<option>France</option>
								<option>Georgia</option>
								<option>Hong Kong</option>
								<option>India</option>
								<option>Japan</option>
							</select>
						</div>
				
						
						<div class="form-control">
							<label for="adress" class="form-label">Address</label>
							<input id="adress" type="text" placeholder="" class="hotdog hotdog-ex">
						</div>
						<div class="form-control">
							<label for="phone" class="form-label">Phone</label>
							<input id="phone" type="text" placeholder="" class="hotdog hotdog-ex">
						</div>
						<div class="form-control">
							<label for="email" class="form-label">Email</label>
							<input id="email" type="text" placeholder="" class="hotdog hotdog-ex">
						</div>
					</form>
					<form>
					<h3>Payment Method</h3>
						<div class="display-inline-block">
							<label for="card-type" class="form-label">Card Type</label>
							<div class="form-select">
								<select>
									<option>Paypal</option>
									<option>Credit Card</option>
								</select>
							</div>
						</div>
						<div class="form-control">
							<label for="name" class="form-label">Card User</label>
							<input id="name" type="text" placeholder="Name" class="hotdog hotdog-ex">
						</div>
						<div class="form-control display-flex">
							<div class="card-number">
								<label for="card-number" class="form-label">Card Number</label>
								<input id="card-number" type="text" placeholder="Number" class="hotdog hotdog-ex">
							</div>

							<div class="card-secret">
								<label for="card-s" class="form-label">Security Code</label>
								<input id="card-s" type="text" placeholder="CVV2" class="hotdog hotdog-ex">
							</div>
						</div>
				
						<div class="form-control">
							<label for="card-date" class="form-label">Expiration Date</label>
								<div class="display-flex" style="align-items:center">
									<div class="form-select card-date-month">
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
										</select>

									</div>
									<div class="slash" style="padding:3px 10px;">/</div>
									
									<div class="form-select card-date-year">
										<select>
											<option>18</option>
											<option>19</option>
											<option>20</option>
											<option>21</option>
											<option>22</option>
											<option>23</option>
											<option>24</option>
											<option>25</option>
										</select>
									</div>
								</div>
						</div>
						
					</form>
					<div class="form-control">
						<div class="display-flex flex-align-center">
							<div class="flex-none"><a href="product_cart.php" class="form-button" >Back to Cart</a></div>
							<div class="flex-stretch"></div>
							<div class="flex-none"><a href="product_actions.php?action=reset-cart" class="form-button" >Go to Purchase</a></div>
						</div>
					</div>

				</div>
		

				<div class="col-xs-12 col-md-4">
					<div class="card" style="background-color: #d9d9d9;">
						<h3>Summary</h3>

						<div class="">
							<?

				       		echo array_reduce($cart,'makeCartList2');

				       		?>
						</div>
						<div class="card-section">
							<h3>Totals</h3>
							<div>
							<?= cartTotals2()?>
							</div>
						</div>
					</div>
					
				</div>

			</div>

			
		</div>
		

	</div>
</body>
</html>