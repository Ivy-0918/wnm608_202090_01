<?php

include_once"lib/php/functions.php";
//any particular page should not include "second", only once;
include_once"parts/templates.php";

//m12 api
include_once "data/api.php";

//在get中提供了默認值，因此基本上該頁面上的所有數據都是圍繞get建立的
setDefault('s','');//search, 空的
setDefault('t','products_all');//type, 所有產品
setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');


// if(isset($_GET['t'])){
// 	$result = file_get_json("data/api.php?".http_build_query($_GET));
// }


//下拉式選單功能
function makeSortOptions() {
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Most Expensive"],
      ["price","ASC","Least Expensive"]
   ];
   //order by:等同以上的默認值; order_by_direction:等同以上的默認值; selected:打印出的默認值
   foreach($options as [$orderby,$direction,$title]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['orderby']==$orderby && $_GET['orderby_direction']==$direction ? "selected" : "").">
      $title
      </option>
      ";
   }
}
//array_merge
function makeHiddenValues($arr1,$arr2) {
   foreach(array_merge($arr1,$arr2) as $k=>$v) {
      echo "<input type='hidden' name='$k' value='$v'>\n";
   }
}


$result = makeStatement($_GET['t']);
$products = isset($result['error']) ? [] : $result;

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Product List</title>

	<?php include "parts/meta.php"?>
</head>
<body>

	<?php include "parts/navbar.php"?>
	

	<div class="container">
		<!-- <div class="search-right">
			
		</div> -->
      	<!-- URL: t=products_by_category&category = toy or model -->
      	<div class="display-flex" style="margin:1em 0">
         <div class="flex-none display-flex">
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"model",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="Models" class="form-button">
            </form>

            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"toy",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="Toys" class="form-button">
            </form>

            <form action="product_list.php" method="get"  style="margin: 30px 10px;">

               <?
               makeHiddenValues($_GET,[]);
               ?>
               <div class="form-select" style="background-color: white;">
                  <select onchange="checkSort(this)">
                     <?=makeSortOptions()?>
                  </select>
               </div>
            </form>
         </div>
        
         <div class="flex-stretch"></div>
        
         <div class="flex-none" style="margin-top: 30px;">
 
            <form action="product_list.php" method="get" class="hotdog stack" style="background-color: white;">
				<!-- 'action': 處理表單提交的URL sent; 'method': 如何提交URL ; 'get': 操作符將表單數據附加到操作URL L ;'post' 將數據作為請求正文發送到服務器. -->
			    <input type="search" name="s" placeholder="Search for a product"
			     value="<?= @$_GET['s'] ?>">

			    <?//makeHiddenValues：當搜索產品時，URL會顯示所有隱藏的價值
			    makeHiddenValues([
			        "orderby"=>$_GET['orderby'],
			        "orderby_direction"=>$_GET['orderby_direction'],
			        "limit"=>$_GET['limit'],
			        "t"=>"search"
			    ],[]);
			    ?>

			    <button type="submit" style="background-color: black; color: white;">Search</button>
			</form>
         </div>
      </div>


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
				$products,//Loop MYSQLQuery
				'makeProductList'

				//搜索級別：產品數量
				// MYSQLIQuery("
				// 	SELECT 
				// 	*FROM products
				// 	ORDER BY date_create DESC
				// 	LIMIT 12
				// " ),

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

</body>
<?php include "parts/footer.php"?>
</html>

