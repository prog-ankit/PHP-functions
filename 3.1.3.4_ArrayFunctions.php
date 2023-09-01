<?php

$hatchbacks = array(
        "Suzuki" => "Baleno",
        "Skoda" => "Fabia",
        "Hyundai" => "i20",
        "Tata" => "Tigor"
    );

// friends who own the above cars
$friends = array("Vinod", "Javed", "Navjot", "Samuel");

// let's merge the two arrays into one
$merged = array_merge($hatchbacks, $friends);//array_merge(aray1,array2,array3,...)
print_r($merged);
echo "<br>";

$merged = array_merge($friends,$hatchbacks);
print_r($merged);
echo "<br>";

$keys = array_keys($merged);
print_r($keys);echo "<br>";

//getting only the values
$merged = array_values($merged);
print_r($merged);echo "<br>";


//getting only the keys
$keys = array_keys($merged);
print_r($keys);echo "<br>";


$lamborghinis = array("Urus", "Huracan", "Aventador");
// removing the last element
print_r($lamborghinis);echo"<br>";
array_pop($lamborghinis);
print_r($lamborghinis);

$lamborghinis = array("Urus", "Huracan", "Aventador");
// adding a new element at the end

print_r($lamborghinis);echo "<br>";
array_push($lamborghinis, "Estoque");
print_r($lamborghinis);

?>