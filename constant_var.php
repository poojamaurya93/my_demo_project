<?php

// define(name, value, case-insensitive)
// Parameters:

// name: Specifies the name of the constant
// value: Specifies the value of the constant
// case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
    define("hello",60);
    echo hello;
   
    echo hello;
?>

<!-- PHP echo and print Statements
Difference between echo and print
echo: 
echo is a statement, which is used to display the output.
echo can be used with or without parentheses.
echo does not return any value.
We can pass multiple strings separated by comma (,) in echo.
echo is faster than print statement.
print:
print is also a statement, used as an alternative to echo at many times to display the output.
print can be used with or without parentheses.
print always returns an integer value, which is 1.
Using print, we cannot pass multiple arguments.
print is slower than echo statement.

-->
<?php
    $fname = "Webtech";  
    $lname = "Computer";  
    echo "My name is: ".$fname,$lname;
?>
<?php  
    //  $fname = "Webtech";  
    //  $lname = "Computer";  
    //  print "My name is: ".$fname,$lname;  
    // echo statement does not return any value. It will generate an error if you try to display its return value.
    // $lang = "PHP";  
    // $ret = echo $lang." is a web development language.";  
    // echo "</br>";  
    // echo "Value return by print statement: ".$ret;  
?> 