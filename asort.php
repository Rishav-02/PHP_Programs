<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Rishav"=>"35", "Ajay"=>"37", "Salman"=>"43");
asort($age);//sort associative arrays in ascending order, according to the value

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>
