<?php
$food = array(
    'fruits' => array('orange', 'banana,apple'),
    'candy' => array('chocolate', 'candy bar'),
);

echo count($food['candy'],1);
?>

<?php
$food=array('orange', 'banana','apple','apple','grapes');
$len=count($food);

for($i=0;$i<$len;$i++){
    echo $food[$i]." ";
}
echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";

?>