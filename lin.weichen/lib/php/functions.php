<?php

// print the object
function print_p($d) {
   echo "<pre>",print_r($d),"</pre>";
}

// $filename = "json_notes.json";
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);
function file_get_json($filename) {
   $file = file_get_contents($filename);
   return json_decode($file);
}
//return; 1. return statement stops the function, 2. turn function file_get_json($filename) into a typr of variable.  a variable that calaulate that it returns.

?>