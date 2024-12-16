<?php

    function display($number){
        if($number<5){
            echo "$number <br>";
            display($number+1);
        }
        else{

        }
    }

    display(1);
    echo "This upper code is end <br>";

    function factorial($n){
        if($n==0){
           return 1;
        }
        else{
            return ($n*factorial($n-1));
        }
    }
    echo factorial(5);
?>