<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");

echo "Count of array element :".count($cars)."<br>";
echo "Size of the array is: ". sizeof($cars)."<br>";


$a=is_array($cars);
echo $a;	//echo is_array($cars);
echo "<br>";
// using ternary operator
$a=is_array($cars) ? "variable is Array variable " : "not an Array variable";
echo $a;echo "<br>";// echo is_array($cars) ? 'Array' : 'not an Array';

$mycar = "xyz";//string type variable
// using ternary operator
echo is_array($mycar) ? "variable is an Array variable " : "not an Array variable";
echo "<br>";

// new concept car by lamborghini
$c = "lamborghini";
$r=in_array($c,$cars);// in_array("lamborghini",$cars);
echo $r."<br>";
echo in_array($c, $cars) ? 'Added to the Lineup' : 'Not yet!';
echo "<br>";


$cars[]="lamborghini";
print_r($cars);
echo "<br>";

$r=in_array($c,$cars);
echo $r."<br>";
echo in_array($c, $cars) ? 'Added to the Lineup' : 'Not yet!';
echo "<br>";

$num = array(10, 20, 30, 40, 50);
// printing the array after reversing it
print_r($num);
echo "<br>";
print_r(array_reverse($num));
echo "<br>";


$colors = array("red", "black", "blue", "green", "white", "yellow");

echo "Color of the day: ". $colors[array_rand($colors)];
echo "<br>";


$hatchbacks = array(
				        "Suzuki" => "Baleno",
				        "Skoda" => "Fabia",
				        "Hyundai" => "i20",
				        "Tata" => "Tigor"
   					 );
    
// we can directly print the result of array flipping
print_r($hatchbacks);
echo "<br>";
print_r(array_flip($hatchbacks));
echo "<br>";

?>
</body>
</html>