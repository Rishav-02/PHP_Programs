<?php

// 1st method
$colors = array("red","yellow","blue","green");

echo $colors[0] . "<br>";
echo $colors[3] . "<br>";

//2nd method
$number =[20,30,40,100,111];

$number[5]="121";//assign new value to array

echo $number[0] . "<br>";
echo $number[4] . "<br>";


//Use for only testing purpose

echo "<pre>";//pre tag use to convert array in readable form
print_r($colors);//print whole array
echo "</pre>";
echo "<br>";

print_r($number);

?>