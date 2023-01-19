<?php

$emp = [
    [1,"Krishna","Manager",50000],
    [2,"Salman","Salesman",20000],
    [3,"Shahrukh","Computer Operator",12000],
    [4,"Aamir","Actor",5000]
];

echo "<table border='2px' cellpadding= '5px'  cellspacing = '0px'>
      <tr>
        <th>Emp Id</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Salary</th>
      </tr> ";

foreach($emp as list($id,$name,$designation,$salary)) {
    echo "<tr> 
    <td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td>
    </tr>";
}
echo "</table>";
