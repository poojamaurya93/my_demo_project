<?php
    class person {
        public $name,$age;
        function __construct($n,$a){
            $this->name=$n;
            $this->age=$a;
        }
        function show(){
            echo $this->name." - " .$this->age;
        }
    }
    $r=new person("webtech",13);
    $r->show();
?>