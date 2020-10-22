<?php

// hello;
// phpinfo();


echo "<h1>Hello</h1>";
echo "<div>bye</div>";

$a = 5;

//String Interpolation
echo "<div>i have $a things</div>";
echo '<div>i have $a things</div>';

//VALUE TYPES

//Number
//Integer
$b = 15;
//Float
$b = 0.5;

$b = 10;

echo "<div>i have $b things</div>";
echo '<div>i have $b things</div>';


//String
$name = "Yerguy";
$name = 'Hi';

//Boolean
$isOn = true;

//function, class, object

//Math
echo 5+4*2;

//Order of Operation
//PEMDS
echo (5+4)*2;

//Concatenation
echo"<div>b + a = " . "c</div>";
echo"<div>$b + $a = " .($b+$a). "</div>";






?>


<hr>
<div>This is my name</div>
<div>
	
<?php

$firstname = "Weichen";
$lastname = "Lin";
$fullname = "$firstname $lastname";

echo $fullname;
?>


</div>

<hr>

<?php

//Superglobal


//?name=May
echo "<div><a href='?name=May'>May</a></div>";
echo "<div><a href='?name=June'>June</a></div>";
echo "<div>My name is {$_GET['name']}</div>";

echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=button'>BUTTON</a></div>";
echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

?>

<hr>

<?php

//Arrays
$colors = array("red","green","blue");
$colors = ["red","green","blue"];

echo $colors[1];

echo"
	<br>$colors[0]
	<br>$colors[1]
	<br>$colors[2]
";

echo count($colors);

?>

<div style="color:<?= $colors[1] ?>">
   This text is green
</div>

//Associative Array

<?php

// Associative Array
$colorsAssociative = [
   "red" => "#f00",
   "green" => "#0f0",
   "blue" => "#00f"
];

echo $colorsAssociative['red'];


?>

<hr>

<?php
 
//Casting
$c = "$a";
$d = $c*1;


?>




