<html>

<head>
    <title>String in Upper Case</title>
</head>

<body>
    <form method="post">
        Enter the Text:<br>
        <input type="text" name="upper">
        <input type="submit" name="submit" value="Submit" />
    </form>
    <!-- "name" attribute is used to get the value in PHP -->
    <?php
    if (isset($_POST["submit"])) {
        $string = $_POST["upper"];
        $string1 = strtoupper($string);

        echo $string1;
    }

    ?>
</body>
</html>