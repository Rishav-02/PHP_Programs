<?php

$x = 10;//global variable
$y = 20;//global variable

//write "global" keyword with the local varible to use it as global variable
function Scope(){
    global $x, $y; //global variable
    echo "Variable x inside function value is: $x <br>";
    $x = $x + $y;

}

Scope();//function call
echo "Varible y is outside function value is: $y <br>";
echo $x;

?>