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

function MYSQLConn(){
	include_once "auth.php";

	@$conn = new mysqli(...MYSQLAuth());
	//@ : seperate warning
	//... php seperate operate

	if($conn->connect_errno) die($conn->connect_error);

	$conn->set_charset('utf8');

	return $conn;
}

function MYSQLQuery($sql){
	$conn = MYSQLConn();

	$a = [];

	$result = $conn->query($sql);

	if($conn->errno) die($conn->error);

	while($row = $result->fetch_object())
		$a[] = $row;

	return $a;
}





?>

