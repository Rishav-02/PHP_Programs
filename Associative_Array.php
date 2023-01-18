<?php

//Associative Array
//where "rishav" is key and 25 is value and rishav is a index 0 , alok is index 1 and so on.
$age = array(
        "rishav" => "25",
        "alok" => 18,
        "aditya" => 30
);

$age["alok"] = 20;//change value of array

echo "<pre>";
var_dump($age);//give key,value and data type
echo "</pre>";

echo $age["rishav"] . "<br>";
echo $age["alok"] . "<br>";
echo $age["aditya"] . "<br>";

?>