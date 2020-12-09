<!-- API的想法是，我們希望給外部數據訪問權限。最初我們做的方式是創建一個製作JSON的頁面。 -->

<!-- 進行MySQL查詢。然後從make語句中返回該值。因此，我們的make語句基本上是我的續集查詢的擴展，它使查詢非常具體，例如檢查是否有數據或類似的數 -->

<!-- 搜索,過濾和排序，這三個概念遍及每個商店中的所有內容，也就是說，數據庫中項目列表的概念就是搜索過濾和排序 -->


<?php

@include_once "../lib/php/functions.php";

function getRequires($props) {
   foreach($props as $prop) {//allows you to loop through all the items have an array. The way this works is we can say loop through all of props and then refer to each value
      if(!isset($_GET[$prop])) return false;
   }
   return true;
}


// print_p(makeStatement('products_all')); >>Success(Products data)
// print_p(makeStatement('product_all')); >>ERROR(No Matched Type)
// print_p(makeStatement('product_by_id')); >>ERROR(Missing Properties)

//Return PHP data
//他們無法請求所有內容，只能請求某些類型的數據。
function makeStatement($type) {

   switch($type) {
      case "products_all":
         return MYSQLIQuery("SELECT *
            FROM `products`
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}");
         break;

      case "products_admin_all":
         return MYSQLIQuery("SELECT *
            FROM `products`
            ORDER BY date_create DESC");
         break;


      case "product_by_id":
         if(!getRequires(['id'])) return
            ["error"=>"Missing Properties"];
         //如果由於某種原因，get中沒有ID，則它將返回缺少屬性的錯誤。
         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `id` = ".$_GET['id']);
         break;
         //如果get中有ID，則它將會變成一組產品。

      //URL:products_by_category&category=toy or model
      case "products_by_category":
         if(!getRequires(['category'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `category` = '{$_GET['category']}'
            
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}
            ");
         break;

      //URL:price_above&price=30, To check the price which is higher than $30
      case "price_above":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `price` > '{$_GET['price']}'
            ORDER BY `price` DESC
            LIMIT {$_GET['limit']}
            ");
         break;

      case "price_below":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `price` < '{$_GET['price']}'
            ORDER BY `price` ASC
            LIMIT {$_GET['limit']}
            ");
         break;




// 進行搜索

      case "search":
         if(!getRequires(['s'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `name` LIKE '%{$_GET['s']}%'
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}
            ");
         break;
         //Like '%search%' >> %: similar example, serach app will show up apple;
         //因為product_list已經設好預設名了，{$_GET['orderby']},{$_GET['orderby_direction']},{$_GET['limit']} >>讓搜索能執行.


      default: return ["error"=>"No Matched Type"];
   }
}


      // case "product_update":
      //    return MYSQLIQuery("UPDATE")
      //       `products`
      //       SET
      //          `title` = `{}`


//URL: t=products_all >>SUCESS"json output"
//URL: t=product_all >>ERROR"No Matched Type"
//URL: t=product_by_id&id=5 >>json pbject of product
// if(isset($_GET['t'])) {
//    echo json_encode(
//       makeStatement($_GET['t']),
//       JSON_UNESCAPED_UNICODE |
//       JSON_NUMERIC_CHECK
//    );
// }
?>


