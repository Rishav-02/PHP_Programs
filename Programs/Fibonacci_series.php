<html>

<body>
    <form method="post">
        Enter the Number: <br><br>
        <input type="number" name="number" placeholder="Enter greater than 2">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
if ($_POST) {
    $num = $_POST['number'];

    //First initialize two numbers
    $num1 = 0;
    $num2 = 1;
    echo "<h3>Fibonacci series for first $num numbers: </h3>";
    echo "\n";
    echo $num1 . ' ' . $num2 . ' ';

    //Loop starts from 2 because we have to add first two number to get the series.
    for($i = 2; $i < $num; $i++){
        $num3= $num1 + $num2;
        echo $num3.' ';
        $num1 = $num2;
        $num2 = $num3;
        
      }
}

?>