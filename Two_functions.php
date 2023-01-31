<?php
// Two function with passing argument by reference

// Reference or '&' pass when function define not when function call

function addFive(&$num)
{
    $num+=5;
}

function addSix($num)
{
    $num+=6;//Here value is 21 but only in this scope not outside this function
}

$orignum=10;

addFive($orignum);//function call

echo "Original value is $orignum </br>";

addSix($orignum);//function call

echo "Original value is $orignum </br>";

?>