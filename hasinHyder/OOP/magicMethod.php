<?php 
class magicMethod{
    private $name;
    private $age;
    private $class;

    public function __construct($name = "", $age = "", $class = ""){
        $this -> name = $name;
        $this -> age = $age;
        $this -> class = $class;
    }

    public function __get($proted){
       return $this -> $proted;
    }  
    
    public function __set($proted, $value){
        $this -> $proted = $value;
    } 


    // public function getName(){
    //     return $this -> name;
    // }
    // public function setName($name){
    //     $this -> name = $name;
    // }
    // public function getAge(){
    //     return $this -> age;
    // }
    // public function setAge($age){
    //     $this -> age = $age;
    // }
    // public function getClass(){
    //     return $this -> class;
    // }
    // public function setClass($class){
    //     $this -> class = $class;
    // }
}

$newObj = new magicMethod("masud Rana", 22, "DIPLOMA");

$newObj -> name = "masud rana";
$newObj -> age = 22;
$newObj -> class = "diploma";

echo $newObj -> name;
echo "\n";
echo $newObj -> age;
echo "\n";
echo $newObj -> class;