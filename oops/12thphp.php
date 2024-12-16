<?php
$connect=mysqli_connect('localhost','root','','test1');

echo "conet";
$query="SELECT * FROM student";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<pre>';
print_r($data);
echo '</pre>';
foreach ($data as $row) {
    
    // Access each row's data using the column names
    echo 'ID: ' . $row['id'] . '<br>'; // Replace 'id' with the actual column name
    echo 'Name: ' . $row['name'] . '<br>';
    echo 'gender: ' . $row['gender'] .'<br>'; // Replace 'name' with the actual column name
    // Add more fields as needed
}

?>