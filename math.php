<?php
echo(pi())."<br>";
// The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200))."<br>";
// The abs() function returns the absolute (positive) value of a number:
echo(abs(-6.7))."<br>";  // returns 6.7

// The sqrt() function returns the square root of a number:

echo(sqrt(64))."<br>";  // returns 8

// The round() function rounds a floating-point number to its nearest integer
echo(round(0.60))."<br>";  // returns 1
echo(round(0.49))."<br>";  // returns 0


// The rand() function generates a random number:
echo(rand())."<br>";
echo(rand(10, 100))."<br>";
// The pow() function returns x raised to the power of y.
// pow(x,y);
echo(pow(2,4) . "<br>");
echo(pow(-2,4) . "<br>");
echo(pow(-2,-4) . "<br>");

// The floor() function rounds a number DOWN to the nearest integer, if necessary, and returns the result.
echo(floor(0.60) . "<br>");
echo(floor(0.40) . "<br>");
echo(floor(5) . "<br>");


// The ceil() function rounds a number UP to the nearest integer, if necessary.

echo(ceil(0.60) . "<br>");
echo(ceil(0.40) . "<br>");
?>