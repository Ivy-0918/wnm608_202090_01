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
//Integer（整數）
$b = 15;
//Float (小數點)
$b = 0.5;
//$ a,b,c 取決於順序排列
$b = 10;

echo "<div>i have $b things</div>";
echo '<div>i have $b things</div>';


//String()
$name = "You guy";
$name = 'Hi';

//Boolean(true or false values)
$isOn = true;

//function, class, object (include parenthesis, exponents, multiplication, division)

//Math
echo 5+4*2;

//Order of Operation
//PEMDS
echo (5+4)*2;

//Concatenation
echo"<div>b + a = " . "c</div>";
//"c</div>">> string; "<div>b + a = ">> string;
echo"<div>$b + $a = " .($b+$a). "</div>";


?>


<hr>
<div>This is my name</div>
<div>
	
<?php

$firstname = "Weichen";
$lastname = "Lin";
$fullname = "$firstname $lastname";
// $fullname = $firstname.$lastname;

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
//("red","green","blue")>>("0,1,2")>>index
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


$colorsObject = (object)$colorsAssociative;

//echo $colorsObject;

echo "<hr>";


//Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssociative['red']."<br>";
echo $colorsAssociative[$colors[0]]."<br>";


//Object Property Notation
echo $colorsObject -> red."<br>";
echo $colorsObject->{$colors[0]}."<br>";


?>

<hr>

<?php

print_r($colors);
echo "<hr>";
print_r($colorsAssociative);
echo "<hr>";
echo "<pre>",print_r($colorsObject),"</pre>";


// CUSTOM FUNCTIONS
function print_p($d) {
   echo "<pre>",print_r($d),"</pre>";
}

print_p($_GET);
print_p($colors);



