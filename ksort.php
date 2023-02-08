<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Rishav"=>"35", "Alok"=>"37", "Sumit"=>"43");
ksort($age);//sort associative arrays in ascending order, according to the key

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>
