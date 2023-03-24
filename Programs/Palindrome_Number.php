<form method="post">
    Enter a String and Number: <input type="text" name="palin" /><br><br>
    <button type="submit">Check</button>
</form>
<?php
if ($_POST) {
    //get the value from form  
    $string = $_POST['palin'];
    //reversing the string  
    $reverse = strrev($string);

    //checking if the input string and reverse is equal  
    if ($string == $reverse) {
        echo "$string is Palindrome";
    } 
    else {
        echo "$string is not a Palindrome";
    }
}

?>