<?php

include_once"lib/php/functions.php";

//switch
switch ($_GET['action']) {
	//新增購物車
	case "add-to-cart":
	    addToCart($_POST['product-id'],$_POST['product-amount']);
	    header("location:product_added_to_cart.php?id={$_POST['product-id']}");
	    break;//定位：product_added_to_cart（購物車中的產品）

    //更新購物車項目
   	case "update-cart-item":
	    $p = cartItemById($_POST['product-id']);
	    $p->amount = $_POST['product-amount'];
	    header("location:product_cart.php");
	    break;

    //過濾購物車項目
   	case "delete-cart-item":
      	$_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){
         return $o->id!=$_POST['product-id'];//檢查每個項目其ID是否不等於(!=)帖子ID。如果相等則移除。
     	});
      	header("location:product_cart.php");
      	break;

    //重置購物車
   	case "reset-cart":
      	resetCart();
      	header("location:product_confirmation.php");
     	break;


		// print_p([$_GET,$_POST,$_SESSION]);//列印產品的條件，必如數量和顏色

		// print_p($product);//列印產品的數據庫(id,name,price...)
	
	default: die("Incorrect Action");


}





?>