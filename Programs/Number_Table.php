<html>

<body>
    <form method="post">
        Enter the number: 
        <input type="number" name="num">
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<!-- if(isset($_POST['submit'])) or if($_POST) 
is same you can write as you wish.
-->
<?php
if ($_POST) {
    $value = $_POST["num"]; //input value stored in $value variable and pass to define() function.

    // The define() function defines a constant.
    // Syntax:-
    //     define(name,value,case_insensitive)

    define('table', $value);
    echo "<h3>Table of $value :</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo $i * table;
        echo '<br>';
    }
}

?>