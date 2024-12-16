<?php
// base classs
class employee{
    public $name,$age,$salary;

    function __construct($n,$a,$s){
      $this->name=$n;
      $this->age=$a;
      $this->salary=$s;  
    }
    // function __construct(){
    //  echo "employee constructor"; 
    //   }
    function show(){
        echo "<h2>name is: ".$this->name." ,age is: ".$this->age." and salary : ".$this->salary."</h2>";
    }
}
// derived class 
class manager extends employee{
    // function __construct(){
   
    // // echo "manager constractor"; 
    // }
}
// $object=new employee("ram",30,50000);
// $object->show();
$mang=new manager("shyam","25","40k");
$mang->show();
class salesman extends manager{

}
$sal=new salesman("amit","35","45k");
$sal->show(); 
?>