<!DOCTYPE html>
<html>
<body>

<?php
trait parent1 {
    public function method1() {
        echo "this is function of praent 1 class: method 1";
    
    }


}

trait parent2 {
   protected $name;
    public function method2($n) {
        $this->name=$n;

echo "this is function of parent 2 class :method2 $this->name";

    }
}

class child1 {
    use parent1;

}

class child2 {
    use parent1,parent2;
   

}

$obj=new child1();
$obj->method1();
$obj2=new child2();
$obj2->method1();
$obj2->method2("vihsal");

?>
 
</body>
</html>
