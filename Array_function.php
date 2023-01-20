<?php

$cars = array('Bmw','Audi','Maruti','Hyundai');

echo in_array('Audi', $cars) . "<br>";//at index 1


//true for strict checking for exactly match
if(in_array('Honda',$cars, true)) {
    echo "Find Successfully";
}
else{
    echo "Can't Find" . "<br>";
}


echo array_search('Bmw',$cars);//at index 0

?>