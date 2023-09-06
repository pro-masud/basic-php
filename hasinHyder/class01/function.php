<?php 


// function isEvent($num){
//     if( $num % 2 == 0 ){
//         return true;
//     }
    
//     return false;
// }

// $x = 11;

// if(isEvent($x)){
//     echo " {$x}Event Number";
// }else{
//     echo "{$x} Odd Number";
// }

// function factoriay(int $num){
//     $fact = 1; 

//     for( $i = $num; $i > 1; $i--){
//         $fact *= $i;
//     }
//     return $fact;
// }

// $x = 10;
// echo "Factorial Of {$x} is ".factoriay($x);

// 





/**
 * function default value set 
*/


// function food($foodOne = "jam", $foodTwo = "papiya"){
//     echo "{$foodOne} is a Good and {$foodTwo} is Very Good In this Segien";
// }


// food();





/**
 * set function working fix data type here
*/

// function ageCal(float $x, $y, $z):float{
//     return $x + $y + $z;
// }


// echo ageCal(4.4, 5.076, 6.888888);





/**
 * how to set function multipul argument
 * 
 *  This Sine Is a -> ...$varibule function multipul argument receive
*/


// function numbers($n, $m, ...$number):int{ //This Sine Is a -> ...$varibule function multipul argument receive
//     $plass=  $n + $m;
//     $result = 0;
//     for($i = 0; $i < count($number); $i++){
//         $result += $number[$i];
//     }

//     return $plass + $result;
// }


// echo numbers(3, 4, 5, 8, 4, 2);






/**
 * function maintanable  
 * 
 * */ 

//  function taskA(){
//     echo "Working To TaskA ";
//  }

//  function taskB(){
//     echo "Working To TaskB";
//  }

//  function taskC(){
//     echo "Working To TaskC";
//  }

//  function taskD(){
//     echo "Working To TaskD";
//  }


//  function taskAll(){
//     taskA();
//     echo "\n";
//     taskB();
//     echo "\n";
//     taskC();
//     echo "\n";
//     taskD();
//  }


//  taskAll();





/**
 * recursive function and recursion work within function
 * */ 

    // function reCupMe($num){
    //     if($num > 20){
    //         return;
    //     }
    //     echo $num;
    //     $num++;

    //     echo "\n";
    //     reCupMe($num);
    // }

    // // echo reCupMe(1);


    // function resCupMe($start, $end, $step){
    //     if($start > $end){
    //         return;
    //     }

    //     echo $start += $step;
    //     echo "\n";

    //     resCupMe($start, $end, $step);

    // }

    // resCupMe(20, 40, 6);




/**
 * 
 * */ 

 function fibonacci($old, $new, $end){
    static $start;
     $start = $start ?? 1;

     if($start > $end){
        return;
     }

     $start++;

     echo $old . " ";
     $_temp = $old + $new;
     $old = $new;
     echo "\n";
     $new = $_temp;
    //  echo $new;


     fibonacci($old, $new, $end);
 }

 fibonacci(0,1, 11);

?>