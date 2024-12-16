<?php
$emp = [
    [1, "Rohan", "Manager", 50000],
    [2, "Salman", "Saleman", 20000],
    [3, "Mohan", "Computer Operater", 18000],
    [4, "Amit", "Diver", 7000],
];

for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 4; $col++) {
        echo $emp[$row][$col]. " "; 
    }
    echo"<br>";
}
echo "<h1>";
foreach($emp as $value){
    foreach($value as $value2){
        echo $value2 ." ";
    }
    echo"<br>";
}

echo '<pre>';
print_r($emp);
echo '</pre>';
echo "</h1>";
?>