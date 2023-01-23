<html>

<head>
    <title>Largest Number in PHP</title>
</head>

<body>
    <form method="post">
        Enter Number One: <input type="text" name="num1"> <br><br>
        Enter Number Two: <input type="text" name="num2"> <br><br>
        Enter Number Three: <input type="text" name="num3"> <br> <br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST["submit"])) {
//value of name i.e num1,num2,num3 is get here
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        if ($num1 > $num2 && $num1 > $num3) {
            echo "The largest Number is " . $num1;
        } else if ($num2 > $num1 && $num2 > $num3) {
            echo "The largest Number is " . $num2;
        } else {
            echo "The largest Number is " . $num3;
        }
    }

    ?>

</body>

</html>