<?php 
class Human{
   public $name;
   public $age;
   public $skill;

   function humanInfo(){
    echo "My name is {$this-> name} and {$this -> age} Years Old o Ji";
   }

//    function skills(){
//         echo "I'm a Full Stack WordPress Developer O ji";
//    }
}


// create a new object o ji 
$human = new Human;

$human -> name = "masud Rana";
$human -> age = "22";
$human -> skill = "Full Stack WordPress Developer";

echo $human -> humanInfo();