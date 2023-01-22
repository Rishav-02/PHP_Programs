<!-- An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.

0, 1, 153, 371, 407, 471, etc are Armstrong numbers.

For example,

407 = (4*4*4) + (0*0*0) + (7*7*7)  
        = 64 + 0 + 343  
407 = 407 
  -->

<html>

<body>
  <form method="post">
    Enter the Number:
    <input type="number" name="number">
    <input type="submit" value="Submit">
  </form>
</body>

</html>
<?php
if ($_POST) {
  //get the number entered  
  $value = $_POST['number'];
  //store entered number in a variable  
  $a = $value;
  $sum  = 0;
  //run loop till the quotient is 0  
  while ($a != 0) {
    $rem   = $a % 10; //find reminder  
    $sum   = $sum + ($rem * $rem * $rem); //cube the reminder and add it to the sum variable till the loop ends  
    $a   = $a / 10; //find quotient. if 0 then loop again  
  }
  //if the entered number and $sum value matches then it is an armstrong number  
  if ($value == $sum) {
    echo "Yes $value is an Armstrong Number";
  } else {
    echo "$value is not an Armstrong Number";
  }
}
?>