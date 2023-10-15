<?php 
// class Student{
//     public $name, $age;
//     function __construct($name, $age){
//         $this -> name = $name;
//         if($age<4){
//             throw new Exception("Invalid Age", 1001);
//         }else if($age > 30){
//             throw new Exception("Too Youger", 1002);
//         }

//         $this -> age = $age;
//     }
// }

// try{
//     $s = new Student("Masud Rana", 32);
// }catch(Exception $e){
//     echo $e -> getCode() .":". $e -> getMessage();
// }


/**
 * how to create a custom exception in php 
 * */
class MyException extends Exception{}
class NetworkException extends Exception{}

function testExceptions(){
    throw new NetworkException();
}


try{
    testExceptions();
}catch(MyException $e){
    echo "My Exception";
}catch(NetworkException $e){
    echo "Network Exception";
}