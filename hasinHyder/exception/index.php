<?php 
class Student{
    public $name;
    public function __construct($name, $age){
        $this -> name = $name;
        if($age<4){
            throw new Exception("Too Young", 1001);
        }elseif($age>25){
            throw new Exception("Too Old", 2001);
        }
    }
}

try{
    $newObj = new Student("masud rana", 26);
}catch(Exception $e){
    echo $e->getCode() . ":" . $e->getMessage();
}