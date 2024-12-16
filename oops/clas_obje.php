<?php
class calculation{
    protected $a,$b,$c;
    function sum(){
        $this->c=$this->a+ $this->b;
        return $this->c;
    }
}
$c1=new calculation();
$c1->a=90;
$c1->b=80;
echo "sum value ".$c1->sum()."\n";
// echo "hello";
?>