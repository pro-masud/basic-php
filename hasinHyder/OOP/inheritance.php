<?php 

class Animal{
    protected $name;
    public function __construct($newName = ""){
        $this -> name = $newName;
    }
    public function eat(){
        echo "he is eating";
    }

    public function runing(){
        echo "he is Running";
    }

    public function sleep(){
        echo "he is Sleeping";
    }

    protected function getTitle($title){
        echo $title ." " . $this -> name;
    }
}

// inheritance here now
class Human extends Animal{
    public function Hi(){
        echo "Hi ";
        $this -> getTitle("Mr.");
    }
}


class Cat extends Animal{
    public function Hi(){
        echo "Hi ";
        $this -> getTitle("Mr.");
    }

}


$newRuble = new Human("Masud Rana");
$newRuble -> Hi();
echo "\n";
$newRuble -> runing();

echo "\n";
 
$newCat = new Cat("Tom");
echo "\n";
$newCat -> Hi();
echo "\n";
$newRuble -> runing();