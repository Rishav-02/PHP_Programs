<?php

//Passing Argument by value
function value($num)
{
   $num += 5;
}


//Passing Argument by Reference(address store)
function reference(&$num)
{
    $num += 7;
}


$number = 10;

value($number);
echo "Original Value is $number<br>";

reference($number);
echo "Original Value is $number<br>";

?>