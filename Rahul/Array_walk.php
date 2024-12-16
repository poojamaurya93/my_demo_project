<?php


$fruits=array(
    "a"=>"Lemon",
    "b"=>"Apple",
    "c"=>"Banana",
    "d"=>"Grapefruit",
);
array_walk($fruits,"myFunction","Is a key of ");

function myFunction($value,$key,$parameter){
    echo "$key $parameter $value"."<br>";

}

?>
<br><br><br><br><br>

<!-- Array walk recursive -->
<?php  
$veggie=array("1"=>"Carrot","2"=>"Tomatoes"); 
$fruits=array(
    $veggie,
    "a"=>"Lemon",
    "b"=>"Apple",
    "c"=>"Banana",
    "d"=>"Grapefruit",
);
array_walk_recursive($fruits,"myFunction1","Is a key of ");

function myFunction1($value,$key,$parameter){
    echo "$key $parameter $value"."<br>";
 
}

?>