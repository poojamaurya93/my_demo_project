<?php
    $a=array("Red","blue","Black","Orange","Pink");
    $newArray=array_rand($a,3);

    echo "<pre>";
        print_r($newArray);
    echo "</pre>";

    echo $a[$newArray[0]].'<br>';
    echo $a[$newArray[1]].'<br>';
    echo $a[$newArray[2]];


?>

<?php
    $a=array("Red","blue","Black","Orange","Pink");
    shuffle($a);
    echo "<pre>";
        print_r($a);
    echo "</pre>";
    // every time change index number
?>