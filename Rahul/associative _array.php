<?php
$age = array(
    "bill" => 30,
    "steve" => 57,
    "rahul" => 25,
    "raj"=>18,
);
$agec=array_change_key_case($age,CASE_UPPER);
echo "<pre>";
print_r($agec);
echo "</pre>";
echo $age["bill"] . "<br>";
echo $age["rahul"] . "<br>";
echo $age["steve"] . "<br>";
echo $age["raj"] . "<br>";
?>