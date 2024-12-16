 <?php 
    $mark=[
        "Rahul"=>[
            "Physics"=>86,
            "Maths"=>90,
            "Chemistry"=>70,
        ],
        "Shivani"=>[
            "Physics"=>56,
            "Maths"=>78,
            "Chemistry"=>73,
        ],
        "Mohan"=>[
            "Physics"=>60,
            "Maths"=>65,
            "Chemistry"=>62,
        ],
        "Bhakti"=>[
            "Physics"=>56,
            "Maths"=>32,
            "Chemistry"=>50,
        ],
    ];
    echo "<table align='center' border='5px' cellpadding='10px' cellpadding='0px'>";
    echo "
        <tr>
            <th>Name</th>
            <th>Physics</th>
            <th>Maths</th>
            <th>Chemistry</th>
        </tr>
    ";
    foreach($mark as $key=>$value){
        echo "<tr>";
        echo" <td>$key</td>";
        foreach($value as $value2){
            echo" <td>$value2</td>";    
        };
        echo "</tr>";
    }
    echo "</table>";


    echo "<pre>";
    print_r($mark);
    echo "</pre>";

    print "<h1>Foreach loop end </h1>";
 ?>



<?php
$emp = [
    [1, "Rohan", "Manager", 50000],
    [2, "Salman", "Saleman", 20000],
    [3, "Mohan", "Computer Operater", 18000],
    [4, "Amit", "Diver", 7000],
];
echo "<table border='5px' cellpadding='10px' cellspacing='0px' align='center'>";
echo   "
    <tr>
        <th>Emp  Id</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Salary</th>
    </tr>
";

foreach($emp as list($id,$name,$designation,$salary)){
    echo "<tr>
        <td>$id</td>
        <td>$name</td>
        <td>$designation</td>
        <td>$salary</td>
    </tr>";
}
echo "</table>";
echo"<pre>";
print_r($emp);
echo"</pre>";

?>