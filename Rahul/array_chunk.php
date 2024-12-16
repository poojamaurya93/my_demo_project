<?php
$cars=['Volvo','BMW','Toyota','Honda','Mercedes','Opel'];
$newArray=array_chunk($cars,3);



echo "<pre>";
print_r($newArray);
echo "</pre>";
?>