<?php

// hello;
// phpinfo();


echo "<h1>Hello</h1>";
echo "<div>bye</div>";

$a = 5;

//String Interpolation
echo "<div>i have $a things</div>";//Result: i have 5 things
echo '<div>i have $a things</div>';//Result: i have $a things


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
echo '<br>';

//Order of Operation
//PEMDAS, PE(exponent and parenthesis); MDS(Multiplication, division, addition and subtraction);
echo (5+4)*2;

//Concatenation, combin two strings together;
//In math, it should break string with . ;
//"<div>b + a = ">> string; "c</div>">> string; 
echo"<div>b + a = " . "c</div>";
echo"<div>$b + $a = " .($b+$a). "</div>";


?>


<hr>
<div>This is my name</div>
<div>
	
<?php

$firstname = "Weichen";
$lastname = "Lin";
$fullname = "$firstname $lastname";//"first last";
// $fullname = $firstname.$lastname 名和姓之間會沒有空間;

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

//&type=h1

echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=button'>BUTTON</a></div>";
//Change <div> To <{$_GET['type']}>
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
echo "<br>";

echo count($colors);//count 總數;

?>


<div style="color:<?= $colors[1] ?>">
   This text is green
</div>


<?php

//array with indexs >> Associative Array and Object
// Associative Array
$colorsAssociative = [
   "red" => "#f00",
   "green" => "#0f0",
   "blue" => "#00f"
];// => , assign "#00f" value to "blue" index;

echo $colorsAssociative['red'];


?>

<hr>

<?php
 
//Casting,將不同的性質去改變價值
$c = "$a";//$c is different type with $a, but value is same as "$a"
$d = $c*1;


$colorsObject = (object)$colorsAssociative;
//echo $colorsObject, Object不能用echo;

echo "<hr>";

//Array Index Notation
echo $colors[0]."<br>";//result:red
echo $colorsAssociative['red']."<br>";//result:#f00;
echo $colorsAssociative[$colors[0]]."<br>";//result:#f00;


//Object Property Notation
echo $colorsObject -> red."<br>";//result:#f00;
echo $colorsObject->{$colors[0]}."<br>";//result:#f00;

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

?>

<hr>

<?php

//Loop (for and while)
//for
for($i = 0; $i<10; $i++){
	echo $i."-";
	// if($i>5){
	// 	exit;
	// }
}
echo "<br>";

for($i = 0; $i<10; $i++){
	echo $i."-";
	if($i>5){
		exit;
	}
}
?>

<hr>

<?php
//conut()
$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

// recursive count
echo count($food, COUNT_RECURSIVE); // output 8

// normal count
echo count($food); // output 2

?>
