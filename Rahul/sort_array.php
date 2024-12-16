<?php

$a=['Sanjay','Aman','Rehman','Karan'];


// sort($a);
rsort($a);
echo '<pre>';
print_r($a);
echo '</pre>';
?>
<!-- sort and sort end -->
<?php
$food=array(
  "d"=>"lemon",
  'a'=>'banana',
  'b'=>'orange',
  'c'=>'apple',

);
natsort($food);

// ksort($food);
// // krsort($food);
echo "<pre>";
print_r($food);
echo "</pre>";

 ?>

<?php
//sort={use in index array}
//rsort={use in index array}
// arsort={use in assoc array }
//asort={use in assoc array }
//krsort={use in key sorting array }
//ksort={use in key sorting array }
//natsort={use in natural order sorting order array }
//natcasesort={use in natural order sorting array }
//array_multisort={use in multiple array sort in once}
//array_reverse={use in array reverse}

?>
