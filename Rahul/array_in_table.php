<?php
$emp = [
    [1, "Rohan", "Manager", 50000],
    [2, "Salman", "Saleman", 20000],
    [3, "Mohan", "Computer Operater", 18000],
    [4, "Amit", "Diver", 7000],
];


// echo "<table border='5px' cellpadding='10px' cellspacing='0px' align='center'>";
// echo "
//     <tr>
//         <th>ID</th>
//         <th>Name</th>
//         <th>Designaton</th>
//         <th>Emp Salary</th>
//     </tr>
// ";
// foreach ($emp as $value) {
//     echo "<tr>";
//     foreach ($value as $value2) {
//         echo"<td>";
//         echo $value2 . " ";
//         echo"</td>";
//     }
//     echo "</tr>";
// }
// echo "<table>";
echo "<table border='1'>";
$a=0;

while($a<4)
{
    echo"<tr>";
    $b=0;
    while ($b <4) 
 {
    echo "<td>";
    echo$emp[$a][$b]." ";
    echo "</td>";
    $b++;
  
  }

//   echo$emp[$a][$b];
// echo";";
//   echo"<br>";
  $a++;
echo"</tr>";
  
}
echo "</table>";
?>