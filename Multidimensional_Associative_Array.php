<?php

$marks = [

    "Krishna" => [
       "physics" => 85,
       "maths" => 78,
       "chemistry" => 89
    ],
    "Rishav" => [
       "physics" => 68,
       "maths" => 73,
       "chemistry" => 79
    ],
    "Sumit" => [
        "physics" => 62,
        "maths" => 67,
        "chemistry" => 92
    ]
];


echo "<table border='2px' cellpadding='10px' cellspacing='0'>
      <tr>
        <th>Student name</th>
        <th>Physics</th>
        <th>Maths</th>
        <th>Chemistry</th>
      </tr> ";

foreach($marks as $key => $v1) {
    echo "<tr>
          <td>$key</td>";//print key
          foreach($v1 as $v2) {
            echo "<td> $v2 </td>";//print value
       }
    echo "</tr>";
}
echo "</table>";


echo "<pre>";
print_r($marks);
echo "</pre>";

?>