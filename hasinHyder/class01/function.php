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

function ageCal(float $x, $y, $z):float{
    return $x + $y + $z;
}


echo ageCal(4.4, 5.076, 6.888888);



?>