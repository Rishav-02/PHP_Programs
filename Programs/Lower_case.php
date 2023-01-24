<html>

<head>
    <title>String in Lower Case</title>
</head>

<body>
<!-- The 'name' attribute is used for posting to e.g. a web server. The 'id' is primarily used for CSS (and JavaScript). Suppose you have this setup: -->
<!-- <input id="message_id" name="message_name" type="text" /> -->
    <form method="post">
        Enter the Text:<br>
        <input type="text" name="lower" id="case">
        <input type="submit" name="submit" value="Submit" />
    </form>

    <!-- In order to get the value with PHP when posting your form, it will use the "name" attribute, like this:

        $_POST["message_name"];
    -->

    <?php
    // "name" attribute is used to get the value in PHP
    if (isset($_POST["submit"])) {
        $string = $_POST["lower"];//get the input value with 'name' attribute
        $string1 = strtolower($string);

        echo $string1;
    }

    ?>
</body>

</html>