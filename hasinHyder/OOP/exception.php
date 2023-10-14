<?php 
class Student{
    public $name, $age;
    function __construct($name, $age){
        $this -> name = $name;
        if($age<4){
            throw new Exception("Invalid Age", 1001);
        }

        $this -> age = $age;
    }
}

try{
    $s = new Student("Masud Rana", 2);
}catch(Exception $e){
    echo $e -> getCode() .":". $e -> getMessage();
}