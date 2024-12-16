<!-- PHP has three types of variable scopes:

Local variable
Global variable
Static variable -->
<?php  
    function local_var()  
    {  
        $num = 45;  //local variable  
        echo "Local variable declared inside the function is: ". $num;  
        echo "</br>";  
    }  
    local_var();  
?>
<?php  
    $name = "Webtech computer";        //Global Variable  
    function global_var()  
    {  
        global $name;  
        echo "Variable inside the function: ". $name;  
        echo "</br>";  
    }  
    global_var();  
    echo "Variable outside the function: ". $name;
    echo "</br>";    
?>  
<?php  
    function static_var()  
    {  
        static $num1 = 3;       //static variable  
        $num2 = 6;          //Non-static variable  
        //increment in non-static variable  
        $num1++;  
        //increment in static variable  
        $num2++;  
        echo "Static: " .$num1 ."</br>";  
        echo "Non-static: " .$num2 ."</br>";  
    }  
      
//first function call  
    static_var();  
    //second function call  
    static_var();  
?>                                               