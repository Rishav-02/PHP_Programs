<?php

//Syntax:- 
// str_replace(find,replace,string,count)

// Here, find space " " , replace and remove space from string
$str = 'The quick " " brown fox';
echo str_replace(" ",'',$str);

?>

<!-- 
    
Parameter	      Description
"find"-	  Required. Specifies thevalue to find.
"replace"-	Required. Specifies the value to replace the value in find.
"string"-	Required. Specifies the string to be searched.
"count" -	Optional. A variable that counts the number of replacements.


 -->