<!-- <?php  
// function sayHello($name){  
// echo "Hello $name<br/>";  
// }  
// sayHello("Sunita");  
// sayHello("Vimal");  
// sayHello("John");  
?>   -->
<?php  
function sayHello($name,$age){  
echo "Hello $name, you are $age years old<br/>";  
}  
sayHello("Sonoo",27);  
sayHello("Vimal",29);  
sayHello("John",23);  
?>  
<?php  

// PHP Variable Length Argument Function
// PHP supports variable length argument function. 
// It means you can pass 0, 1 or n number of arguments in function.
// To do so, you need to use 3 ellipses (dots) before the argument name.

function add(...$numbers) {  
    $sum = 0;  
    foreach ($numbers as $n) {  
        $sum += $n;  
    }  
    return $sum;  
}  
  
echo add(1, 2, 3, 4, 5, 6)."<br>";  
?> 
<?php    
function factorial($n)    
{    
    if ($n < 0)    
        return -1; /*Wrong value*/    
    if ($n == 0)    
        return 1; /*Terminating condition*/    
    return ($n * factorial ($n -1));    
}  
echo factorial(8)."<br>";       
echo factorial(5)."<br>";    

?>    