<?php 
function sum($math,$hindi,$sc){
    $s=$math+$hindi+$sc;
    return $s;
}
function percentage($st){
    $per=$st/3;
    echo $per ."%";
}
$total=sum(55,60,70);
percentage($total);

?>