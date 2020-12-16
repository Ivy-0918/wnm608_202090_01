<?php



//以下都是重複性功能. 意味著我能使用'ProductList' &'ProductCart'在其他頁面重複做使用.
//product_list.php(產品排列)
function makeProductList($r,$o){
return $r. <<<HTML
<div class="col-xs-12 col-md-4">
   <a href="product_item.php?id=$o->id" class="product-item">
      <figure>
         <div class="product-image">
            <img src="images/store/$o->image_thumb" alt="">
         </div>
         <figcaption class="product-description"  style="text-align:center;">
            <div class="product-name">$o->name</div>
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

function makeCategoryList($r,$o){
return $r. <<<HTML
<div class="col-xs-12 col-md-4">
   <a href="product_item.php?id=$o->id" class="product-item">
      <figure>
         <div class="product-image">
            <img src="images/store/$o->image_thumb" alt="">
         </div>
         <figcaption class="product-description"  style="text-align:center;">
            <div class="product-name">$o->name</div>
            

            <div class="item-button">
               <button type="button" class="cart-button">View More</button>
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
   <div class="cart_form"></div>
      <div class="flex-none image-thumbs">
         <img src="images/store/$o->image_thumb">
      </div>
      <div class="flex-stretch" style="margin: 1em;">
         <strong>$o->name</strong>

         <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()" style="width: 20%;padding: 20px 0;">
            <input type="hidden" name="product-id" value="$o->id">
            <div class="form-select" style="font-size:0.8em">
               $selectamount
            </div>
         </form>
         
         <div>&dollar;$totalfixed</div>
      </div>
   
   
   <div class="flex-none">
      <form action="product_actions.php?action=delete-cart-item" method="post">
         <input type="hidden" name="product-id" value="$o->id">
         <input type="submit" value="Delete" class="form-button inline" style="font-size:0.8em">
      </form>
   </div>
</div>
HTML;
}


function makeCartList2($r,$o) {
$totalfixed = number_format($o->total,2,'.','');//價位的小數點後保持“兩位數”。ex:$30.00
$selectamount = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex">
      <div class="flex-none image-thumbs">
         <img src="images/store/$o->image_thumb">
      </div>

      <div class="card-section flex-stretch" style="margin: 10px;">
       
            <strong>$o->name</strong>
    
        
            <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()" style="width: 20%;padding: 3px 0;">
               <input type="hidden" name="product-id" value="$o->id">
               <div class="form_cart" style="font-size:0.8em">
                  $o->amount
               </div>
            </form>

    
            <div>&dollar;$totalfixed</div>
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
<div class="card-section display-flex">
   <div class="flex-none">
      <a href="product_list.php" class="form-button">Back to Shop</a>
   </div>
   <div class="flex-stretch"></div>
   <div class="flex-none">
      <a href="product_checkout.php" class="form-button">Checkout</a>
   </div>
</div>
HTML;
}

function cartTotals2() {

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
HTML;
}


// AdminList
function makeAdminList($r,$o) {
return $r.<<<HTML
<div class="display-flex flex-align-center card flat soft">
   <div class="flex-none image-thumbs">
      <img src="images/store/$o->image_thumb">
   </div>

   <div class="flex-stretch" style="padding:1em">
      <div><strong>$o->name</strong></div>
      <div>$o->category</div>
   </div>

   <div class="flex-none">
      <div class="card-section"><a href="admin/?id=$o->id" class="form-button">Edit</a></div>
      <div class="card-section" style="margin: 0; padding-bottom: 30px;" ><a href="product_item.php?id=$o->id" class="form-button">View</a></div>
   </div>
</div>
HTML;
}






// makeRecommend 隨機照片


//Related Product(random)
function makeRecommend($a) {
$products = array_reduce($a,'makeProductList');
echo <<<HTML
<div class="grid gap productlist">$products</div>
HTML;
}


//Related Product(similar)，比如模型會推薦模型;玩具會推薦玩具
function recommendSimilar($cat,$id=0,$limit=3) {
   $result = MYSQLIQuery("
         SELECT *
         FROM products
         WHERE
            `category`='$cat' AND
            `id` <> $id
         ORDER BY rand()
         LIMIT $limit
      ");
   // `id` 不等於 $id
   makeRecommend($result);
}

//Related Product(category),
function recommendCategory($cat,$limit=3) {
   $result = MYSQLIQuery("
         SELECT *
         FROM products
         WHERE
            `category`='$cat'
         ORDER BY `date_create` DESC
         LIMIT $limit
      ");
   makeRecommend($result);
}