<?php
    function testing( &$string){
        $string.=" and something extra";
    }
    $str="This is string";
    testing($str);
    echo "<h1>" .$str ."</h1>";


    function first($num){
        $num +=5;
    }
    function second(&$num){
        $num+=7;
    }
    $number=10;
    first($number);
    echo"Original Value is $number<br>";
    second($number);
    echo"Original Value is $number<br>";

?>