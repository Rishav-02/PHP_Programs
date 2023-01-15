 <!-- constant variable 
 Syntax:-
define(name, value, case-insensitive

Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false -->

<!-- constant variables are case-sensitive -->
<?php
define("test",50);
echo test;

// this case-insensitive parameter is depecated after version 7.4 in php.
define("place",2000,true);
echo place;

?>