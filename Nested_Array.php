<?php

//Multidimensional Array of Index Array
$emp = [
 
    [1,"Krishna","Manager",50000],
    [2,"Rishav","Developer",100000],
    [3,"Mohan","Doctor",150000],
    [4,"Ram","Priest",20000]

];


echo "<pre>";
print_r($emp);
echo "</pre>";

//print data using for loop
for($row = 0; $row < 4; $row++) {
    for($col = 0; $col < 4; $col++){
         echo $emp[$row][$col] . " ";
    }
    echo "<br>";
}
echo "<br>";

//These data are easily print by loop
//print all Job
echo $emp[0][2] . "<br>";
echo $emp[1][2] . "<br>";
echo $emp[2][2] . "<br>";
echo $emp[3][2] . "<br>";

echo "<br>";

//print all salary
echo $emp[0][3] . "<br>";
echo $emp[1][3] . "<br>";
echo $emp[2][3] . "<br>";
echo $emp[3][3] . "<br>";

?>