<?php  
// By default, value passed to the function is call by value.
//  To pass value as a reference, you need to use ampersand (&) symbol before the argument name.
function adder(&$str2)  
{  
    $str2 .= 'Webtech computer Call By Reference';  
}  
$str = 'Hello ';  
$str1 = 'MY ';
adder($str);  
adder($str1); 
echo $str."<br>";
echo $str1;  
?>


<?php  
// $int = (intreadline('Enter an integer:'));
function cube($int){  
return $int*$int*$int;  
}  
echo "Cube of 3 is: ".cube(3);  
?>  
