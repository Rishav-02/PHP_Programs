<!-- The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax :
foreach ($array as $value) {
  code to be executed;
}

 -->


<?php

$indexArray = ['red','green','blue'];

// For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
foreach($indexArray as $color) {
    echo $color . "<br>";
}

echo "<br>";

$associativeArray = [
        "rishav" => 25,
        "alok" => 18,
        "aditya" => 30
];

echo "<ul>";
foreach($associativeArray as $key => $age) {
    echo "<li> $key = $age </li>";
}
echo "</ul>";

?>