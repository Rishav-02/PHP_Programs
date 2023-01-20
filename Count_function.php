<!-- //The sizeof() function returns the number of elements in an array.

// Syntax:  sizeof(array, mode)

// The sizeof() function is an alias of the count() function.

//The count() function returns the number of elements in an array.

//Syntax:   count(array, mode)


/*
array:	  Required. Specifies the array

mode:	Optional. Specifies the mode.

          Possible values:
0 - Default. Does not count all elements of multidimensional arrays
1 - Counts the array recursively (counts all the elements of multidimensional arrays) */ -->



<?php

$food = array('orange','banana','apple','apple');

echo count($food) . "<br>";//4

echo sizeof($food) . "<br>";//4


$len = count($food);

for($i =0; $i < $len; $i++) {
    echo $food[$i] . "<br>";
}

// echo array_count_values($food);//return array

print_r(array_count_values($food));
echo "<br>";

//Creating array 1st type is fruits and 2nd type is veggie.
$name = [
       'fruits' => ['orange','banana','apple'],
       'veggie' => array('carrot','brinjal','pea')
];

// 1st array is fruits and 2nd array is veggie and both have three values
echo count($name) . "<br>";//2
echo count($name,1) . "<br>";//8  i.e fruits has 4 and veggie has 4

echo sizeof($name['fruits'],1);//3


?>