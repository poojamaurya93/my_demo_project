<?php    
for($i=1;$i<=8;$i++){    
    echo "<br>";
        for($j=$i;$j<=8;$j++){    
        echo " ".$j;    
}    
}    
?>
<!-- output 
1 2 3 4 5 6 7 8
2 3 4 5 6 7 8
3 4 5 6 7 8
4 5 6 7 8
5 6 7 8
6 7 8
7 8
8
-->
<?php    
for($i=8;$i>=1;$i--){    
    echo "<br>";
        for($j=$i;$j<=8;$j++){    
        echo $i." ";    
}    
}    
?>

<!-- output
8
7 7
6 6 6
5 5 5 5
4 4 4 4 4
3 3 3 3 3 3
2 2 2 2 2 2 2
1 1 1 1 1 1 1 1
-->
<?php    
for($i=1;$i<=8;$i++){    
    echo "<br>";
        for($j=$i;$j<=8;$j++){    
        echo " ".$i;    
}    
}    
?>

<!-- output
1 1 1 1 1 1 1 1
2 2 2 2 2 2 2
3 3 3 3 3 3
4 4 4 4 4
5 5 5 5
6 6 6
7 7
8 -->
<?php    
for($i=8;$i>=1;$i--){    
    echo"<br>";
        for($j=$i;$j>=1;$j--){    
        echo " "."$j";    
}    
}    
?>
<!-- output
8 7 6 5 4 3 2 1
7 6 5 4 3 2 1
6 5 4 3 2 1
5 4 3 2 1
4 3 2 1
3 2 1
2 1
1
-->