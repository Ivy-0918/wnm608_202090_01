<?php


//以下都是重複性功能. 意味著我能使用'ProductList' &'ProductCart'在其他頁面重複做使用.

function makeProductList($r,$o){
return $r. <<<HTML
<div class="col-xs-12 col-md-4">
   <a href="product_item.php?id=$o->id" class="product-item">
      <figure>
         <div class="product-image">
            <img src="images/store/$o->image_thumb" alt="">
         </div>
         <figcaption class="product-description"  style="text-align:center;">
            <div class="product-title">$o->name</div>
            <div class="product-price" >&dollar;$o->price</div>

            <div class="item-button">
               <button type="button" class="cart-button">Buy Now</button>
            </div>
         </figcaption>
      </figure>
   </a>
</div>
HTML;
}



function selectAmount($amount=1,$total=10) {//default:$amount=1,$total=10
   $output = "<select name='product-amount'>";
   for($i=1;$i<=$total;$i++) {
      $output .= "<option ".($i==$amount?'selected':'').">$i</option>";
   }//如果$i等於$amount,我們則打印出選定的選項。
   $output .= "</select>";
   return $output;
}
//原先的“makeCartList”
   // function makeCartList($r,$o) {
   // return $r.<<<HTML
   // <div class="display-flex">
   //    <div class="flex-none image-thumbs">
   //       <img src="images/store/$o->image_thumb">
   //    </div>
   //    <div class="flex-stretch">
   //       <strong>$o->name</strong>
   //       <div>Delete</div>
   //    </div>
   //    <div class="flex-none">
   //       $dollar;$o->price
   //    </div>
   // </div>
   // HTML;
   // }

//連接到“product_cart.php”
function makeCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');//價位的小數點後保持“兩位數”。ex:$30.00
$selectamount = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="images/store/$o->image_thumb">
   </div>
   <div class="flex-stretch">
      <strong>$o->name</strong>
      <form action="product_actions.php?action=delete-cart-item" method="post">
         <input type="hidden" name="product-id" value="$o->id">
         <input type="submit" value="Delete" class="form-button inline" style="font-size:0.8em">
      </form>
   </div>
   <div class="flex-none">
      <div>&dollar;$totalfixed</div>
      <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
         <input type="hidden" name="product-id" value="$o->id">
         <div class="form-select" style="font-size:0.8em">
            $selectamount
         </div>
      </form>
   </div>
</div>
HTML;
}




function cartTotals() {

$cart = getCartItems();

$cartprice = array_reduce($cart,function($r,$o){return $r+$o->total;},0);

$pricefixed = number_format($cartprice,2,'.','');
$tax = number_format($cartprice*0.0725,2,'.','');
$taxed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Sub Total</strong></div>
   <div class="flex-none">&dollar;$cartprice</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Taxes</strong></div>
   <div class="flex-none">&dollar;$tax</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Total</strong></div>
   <div class="flex-none">&dollar;$taxed</div>
</div>
<div class="card-section">
   <a href="product_checkout.php" class="form-button">Checkout</a>
</div>
HTML;
}