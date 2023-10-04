<?php 

// class Animal{
//     protected $name;
//     public function __construct($newName = ""){
//         $this -> name = $newName;
//     }
//     public function eat(){
//         echo "he is eating";
//     }

//     public function runing(){
//         echo "he is Running";
//     }

//     public function sleep(){
//         echo "he is Sleeping";
//     }

//     protected function getTitle($title){
//         echo $title ." " . $this -> name;
//     }
// }

// // inheritance here now
// class Human extends Animal{
//     public function Hi(){
//         echo "Hi ";
//         $this -> getTitle("Mr.");
//     }
// }


// class Cat extends Animal{
//     public function Hi(){
//         echo "Hi ";
//         $this -> getTitle("Mr.");
//     }

// }


// $newRuble = new Human("Masud Rana");
// $newRuble -> Hi();
// echo "\n";
// $newRuble -> runing();

// echo "\n";
 
// $newCat = new Cat("Tom");
// echo "\n";
// $newCat -> Hi();
// echo "\n";
// $newRuble -> runing();



class parentClass{
    public $name;

    public function __construct($name){
        $this -> name = $name;
        $this -> sayHi();
    }

    public function sayHi(){
        echo "Hi," . $this -> name;
    }
}



class ChildClass extends parentClass{
    public function sayHi(){
        parent::sayHi();
        echo "\n";
        echo "Hello";
    }
}

$newObj = new ChildClass("Masud Rana");