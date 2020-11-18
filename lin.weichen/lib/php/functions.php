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


//連接資料庫：MYSQL
// Create connection ($conn)
function MYSQLConn(){
	include_once "auth.php";

	@$conn = new mysqli(...MYSQLAuth());
	//@ : suppressing the warning;
	//結果：會消除php warning，留下connection error(提醒你auth的某項資料可能有錯誤。);

// Check connection
	if($conn->connect_errno) die($conn->connect_error);
	//如果connect_errno是錯誤的，則會列印出connect_error;
	// die : 如果前者有錯誤，則會停止運行 且列印錯誤信息;

	$conn->set_charset('utf8');

	return $conn;
}

//SQL
//Query
function MYSQLQuery($sql){
	$conn = MYSQLConn();

	//this function will create $a;
	//叫出MYSQL的所有資料(id,name,date_create,...etc;)
	$a = [];

	$result = $conn->query($sql);

	if($conn->errno) die($conn->error);

	while($row = $result->fetch_object())
		$a[] = $row;

	return $a;
}





?>

