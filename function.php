<?php

function Hello()
{
    echo "Namaste PHP"."<br>";
}

Hello();
echo "Hey" . "<br>";// . is concat operator
Hello();
echo "<br>";


function sum($math, $eng, $hindi)
{
    $s = $math + $eng + $hindi;

    return $s;
}

function percentage($st)
{
     $per = $st / 3 ;

     echo $per ."%". "<br>";//56
}

$total = sum(45,89,34);//function sum takes three values as an argument

percentage($total);

echo $total . "<br>";//168
?>