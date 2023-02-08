<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Priya"=>"15", "Nidhi"=>"26", "Katrina"=>"39");
krsort($age);//sort associative arrays in descending order, according to the key

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>
