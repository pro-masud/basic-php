<?php 
/**
 * singlepot database design systems
 * */ 
class SomeClass{
    static $instance = [];
    private $name; 

    function __construct($name){
        $this -> name = $name;
        echo "New Instance created \n";
    }

    static function getInstance($name = null){
        if(!isset(self::$instance[$name])){
            self::$instance[$name] = new SomeClass($name);
        }
        return self::$instance[$name];
    }

    public function writeData($name){
        echo "write a data to {$this -> name} \n";
    }

    static function dump(){
        print_r(self::$instance);
    }

}


// create a object here
$obj2 = SomeClass::getInstance("Rahim");
$obj1 = SomeClass::getInstance("Fahim Hossain");

$obj2 -> writeData("Some Data Here");
$obj1 -> writeData("Some Data Here");

$obj2 -> dump();
