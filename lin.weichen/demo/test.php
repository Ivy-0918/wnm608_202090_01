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
   <div class="container">
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
   </div>
</body>
</html>   