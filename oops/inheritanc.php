<?php
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
            echo "<h1>Employee profile</h1>";
            echo "<h2>name is: $this->name";
            echo" <br>age is: $this->age";
            echo"<br>salary : $this->salary</h2>";
        }
    }
    // derived class 
class manager extends employee{
    public $ta=1000;
    public $phone=300;
    public $totalsalary;
    function show(){
        $this->totalsalary=  $this->salary+  $this->ta+$this->phone;
        echo "<h1>Manager profile</h1>";
        echo "<h2>name is: $this->name";
        echo" <br>age is: $this->age";
        echo"<br>salary : $this->totalsalary</h2>";
    }
}
$obje1=new manager("Krish",45,6000);
$obje1->show();
$obje2=new employee("shyam",35,5000);
$obje2->show();
?>