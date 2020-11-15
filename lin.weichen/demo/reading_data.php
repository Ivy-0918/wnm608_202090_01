<?php

//
include "../lib/php/functions.php";

$notes_object = file_get_json("json_notes.json");
// $filename = "json_notes.json";
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);

$users_array = file_get_json("users.json");


// print_p($notes_object);

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Notes</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <header class="navbar">
      <div class="container">
         <h1>Notes</h1>
      </div>
   </header>

   <div class="container">
      <div class="card soft">
         <h2>JSON Notes</h2>

         <ul>
         <?php

         // for(instantiation; comparison; iteration)
         //$notes_object->notes; notes properity can be changed cause notes from data 
         for($i=0; $i<count($notes_object->notes); $i++){
            echo "<li>".
            $notes_object->notes[$i].
            "</li>\n";//\n, 在html的畫面多了空行，方便閱讀
         }

         ?>
         </ul>

      </div>


      <div class="card soft">
         <h2>Users</h2>

         <ul>
         <?php

          // instantiation comparison iteration
         for($i=0; $i<count($users_array); $i++){
            echo "<li>
            <strong>{$users_array[$i]->name}</strong>
            <span>{$users_array[$i]->type}</span>
            </li>\n";
            //use {braces} , 可用於包覆“複雜”。 
            //use one "", 可用於“多行”段落。 

         }

         ?>
         </ul>

      </div>
   </div>
   
</body>
</html>