<?php

$name = "Ram is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strpos($name ,"is");//starts with 0 and space counts 
echo "<br>";

echo str_repeat($name, 4);
echo "<br>";

// Replace Ram from Shyam 
echo str_replace("Ram","Shyam",$name);
echo "<br>";

?>