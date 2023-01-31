<?php
 //if(isset($_POST['Submit'])) or if($_POST)are same
 if($_POST)
 {
    $num1 = $_POST['numberone'];
    $num2 = $_POST['numbertwo'];
 }

 if($num1 == "" || $num2 == "")
 {
    echo "All the fields are mandatory";
 }
 else
 {
    $sum = $num1 + $num2;
    echo $sum;
 }

?>

