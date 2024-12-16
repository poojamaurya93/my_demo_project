<?php
function myFunction($x,$y){
    return $x.'-'.$y;
}
    $a=['Orange','banana','apple'];
    $new=array_reduce($a,'myFunction');
    echo '<pre>';
    print_r($new);
    echo '</pre>';


?>

<?php
function myFunction2($n,$m){
    $n=$n+$m;
    return $n;
}
    //$a=['Orange','banana','apple'];
    $a=[1,2,3,4,5];
    $new=array_reduce($a,'myFunction2');
    echo '<pre>';
    print_r($new);
    echo '</pre>';


?>