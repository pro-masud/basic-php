<?php 
/**
 * singlepot database design systems
 * */ 
class SomeClass{
    static $instance;
    private $name; 

    function __construct($name){
        $this -> name = $name;
        echo "New Instance created \n";
    }

    static function getInstance($name = null){
        if(!self::$instance){
            if($name){
                self::$instance = new SomeClass($name);
            }else{
                self::$instance = new SomeClass("");
            }
        }else{
            echo "Old Instance Suppliend \n";
        }
        return self::$instance;
    }

    function getName(){
        echo $this -> name . "\n";
    }

}


// create a object here
$obj2 = SomeClass::getInstance("Rahim");
$obj3 = SomeClass::getInstance("Kasim");
$obj1 = SomeClass::getInstance("Masud");

$obj1->getName();
$obj2->getName();
$obj3->getName();
