<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Natasha"=>"35", "Pooja"=>"28", "Samantha"=>"36");
arsort($age);//sort associative arrays in descending order, according to the value

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>
