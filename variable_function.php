<?php

//1st method
function wow($name){
    echo "Hello, $name";
}

$fun ="wow";//function name wow is assign to $fun variable
$fun("Rishav Raj");//wow function call

echo "<br>";

//2nd method
$sayHello = function ($name){
    echo "Hello, $name";
};

$sayHello("PHP");

?>