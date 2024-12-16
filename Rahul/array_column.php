<?php
$array = array(
    array(
        'id'=>2201,
        'first_name'=>'Rahul',
        'last_name'=>'Maurya'
    ),
    array(
        'id'=>2202,
        'first_name'=>'Komal',
        'last_name'=>'Sharam',

    ),
    array(
        'id'=>2203,
        'first_name'=>'Shivani',
        'last_name'=>'Patil',
        
    ),
    array(
        'id'=>2204,
        'first_name'=>'Abhi',
        'last_name'=>'Raj',
        
    ),
);

$newArray=array_column($array,'first_name','id');
echo '<pre>';
print_r($newArray);
echo '</pre>';
// first_name array
$newArray2=array_column ($array,'last_name','first_name');
echo '<pre>';
print_r($newArray2);
echo '</pre>';
// Last_name array
?>