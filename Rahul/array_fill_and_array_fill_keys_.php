<?php
$a=array("a","b","c","d","e","f");
$newArray=array_fill_keys($a,"Testing");

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>


<?php
$b=array("a","b","c","d","e","f");
$newArray2=array_fill(3,10,"Webtech");



echo "<pre>";
print_r($newArray2);
echo "</pre>";


?>