<?php 
// class Human{
//    public $name;
//    public $age;
//    public $skill;

//    function humanInfo(){
//     echo "My name is {$this-> name} and {$this -> age} Years Old o Ji";
//    }

// //    function skills(){
// //         echo "I'm a Full Stack WordPress Developer O ji";
// //    }
// }


// // create a new object o ji 
// $human = new Human;

// $human -> name = "masud Rana";
// $human -> age = "22";
// $human -> skill = "Full Stack WordPress Developer";

// echo $human -> humanInfo();


// class Human{
//    public $name;
//    public $age;
//    public $skill;

//    function humanInfo(){
//     echo "My name is {$this-> name} and {$this -> age} Years Old oh Ji and ";
//     $this -> skills();
//    }

//    function skills(){
//         echo "I'm a Full Stack WordPress Developer Oh ji";
//    }
// }


// // create a new object o ji 
// $human = new Human;

// $human -> name = "masud Rana";
// $human -> age = "22";
// $human -> skill = "Full Stack WordPress Developer";

// echo $human -> humanInfo();


class Human{
    public $name;
    public $age;
    public $skill;

    function __construct($name = "Masud Rana", $age = 12, $skill = "PHP Developer"){
        $this -> name = $name;
        $this -> age = $age;
        $this -> skill = $skill;
        
        //humaninfo function invacate here
        $this -> humanInfo();
    }

    function humanInfo(){
        echo "My name is {$this-> name} and {$this -> age} Years Old oh Ji and ";
        $this -> skills();
    }

    function skills(){
        echo "I'm a Full Stack WordPress Developer Oh ji";
    }
 

 }
 
 
 // create a new object o ji 
 $human = new Human();

 