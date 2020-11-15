<?php

include "../lib/php/functions.php";

$filename = "users.json";
$users = file_get_json($filename);

//edit form
//print_p([$_GET,$_POST]);

//取代edit_user
$empty_user = (object)[
	"name"=>'',
	"type"=>'',
	"email"=>'',
	"classes"=>[]
	//"classes" use [array], not "string".
];

//edit data
//在edit-user-...中，刪掉edit-，而是用empty來更新form
if(isset($_POST['user-name'])){
	$users[$_GET['id']]->name = $_POST['user-name'];
	$users[$_GET['id']]->type = $_POST['user-type'];
	$users[$_GET['id']]->email = $_POST['user-email'];
	$users[$_GET['id']]->classes = explode(",",$_POST['user-classes']);

	file_put_contents($filename,json_encode($users));
	//encode data $users into Json and write to $filename. 
}
//implode:array; explode:spring;

function showUserPage($user) {

// implode:(夾雜”符號“ , array);
// $user->classes: array >> single items >> single string. ", ": 後者爆裂後string 會與前者string 串連一起
$classes = implode(", ", $user->classes);


// echo $user->name; 只會顯示名字(->name)

//php heredoc: 在phph, 'hightlight'該編程語言. 位置must in 'left side', 使用'tag'無效
//echo <<<HTML content HTML;}, hightlight HTML content


echo <<<HTML
<div class="card soft">
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>
</div>
<div class="grid gap">
	<div class="col-xs-12 col-md-4">
		<div class="card soft">
			<h2>$user->name</h2>
			<div>
				<strong>Type</strong>
				<span>$user->type</span>
			</div>
			<div>
				<strong>Email</strong>
				<span>$user->email</span>
			</div>
			<div>
				<strong>Classes</strong>
				<span>$classes</span>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-8">
		<form method="post" action="">
			<h2>Edit User</h2>
			
			<div class="form-control">
				<label for="user-name" class="form-label">Name</label>
				<input id="user-name" name="user-name" type="text" placeholder="Type user name" class="form-input" value="$user->name">
			</div>
			<div class="form-control">
				<label for="user-type" class="form-label">Type</label>
				<input id="user-type" name="user-type" type="text" placeholder="Type user type" class="form-input" value="$user->type">
			</div>
			<div class="form-control">
				<label for="user-email" class="form-label">Email</label>
				<input id="user-email" name="user-email" type="text" placeholder="Type user email" class="form-input" value="$user->email">
			</div>
			<div class="form-control">
				<label for="user-classes" class="form-label">Classes</label>
				<input id="user-classes" name="user-classes" type="text" placeholder="Type user classes" class="form-input" value="$classes">
			</div>

			<div class="form-control">
				<input class="form-button" type="submit" value="save">
			</div>
		</form>
	</div>
</div>


	


HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h1>Users Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
         <nav class="nav flex-none">
            <ul class="display-flex">
            	<!-- demo/users_admin.php >> $_SERVER['PHP_SELF'] -->
            	<!-- $_SERVER:可用於PHP的服務器超級全局服務器 -->
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      

         <?php

        //isset:確定是否將變量(varilable)
        if(isset($_GET['id'])) {
        	//showUserPage(): make function by ourself
        	// ternary or conditional
            showUserPage(
            	$_GET['id']=='new' ?//A
            		$empty_user://B
            		$users[$_GET['id']]//C
            		//If A is true, question mark, do B; But if A is false, do C.
            );
    
		} else{


         ?>
         <div class="card soft">
         <h2>User List</h2>
         
         <ul>
         <?php
         //CRUD >> read
         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
            //id:index in the array of the users

         }

         ?>
         </ul>
     	</div>
         <?php }//value of else ?>
   </div>
   
</body>
</html>