<form action="product_list.php" method="get" class="hotdog stack">
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

    <button type="submit" >Search</button>
</form>