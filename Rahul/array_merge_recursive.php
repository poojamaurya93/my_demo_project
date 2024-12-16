<?php

    $fruit=['a'=>"orange",'b'=> "Banana",'c'=> "Grapes"];
    $veggie=['b'=>'carrot','e'=>'pea'];
    $newArray=array_merge_recursive($fruit,$veggie);
    echo "<pre>";
    print_r($newArray);
    echo "<pre>";

//issme is same key wale array ko ek alaag se hi array bnta deta h
?>