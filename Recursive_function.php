<?php

function factorial($num) {
  if($num == 0) {
    return 1;
  }
  else {
    return($num * factorial(($num -1)));//function call recursively
  }
}

echo factorial(5);

?>