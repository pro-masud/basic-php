<?php 


/**
 * 
 * Day: 01    CLASS: 1.2 
 * 
 */

// $name = 'bangladesh';
// $age = 16;
// $question = "How Are Your?";


// $word = "age";


// echo 'Hello'.$name. "" . $question;

// echo "\n";

// echo 'Hello $name';

// echo "\n";

// echo "Hello {$name}, {$question}\n";

// echo "Hello {$name}, {$question}\n";






/**
 * 
 * Day: 01    CLASS: 1.3
 * 
 */


//  $task = "Hello World";
//  echo $task;
//  echo "\n";

//  $task = "Pro World";
//  echo $task;
//  echo "\n";

//  #comment 
//  //comment
//  /*
//     Comments
//  */

//  /**
//   * multi pul line comment data here now
//  */

// define("PI", 3.14159);

// echo PI;




/**
 * 
 * Day: 01    CLASS: 1.7
 * 
 */


//  $number = 12;

//  $number += 13; // $number = $number + 13;

// $number = (20-10) * 2;

// $number = (30-24) / 2;

// $number = (33 - 3) % 4; //BODMAS = Bracket, Of, Division, Multiplication, Addition, and Subtraction
 
//  echo $number ;






/**
 * 
 * Day: 01    CLASS: 1.8
 * 
 */


 $n = 7;
// //  $m = $n++; // $m = $n;  hoto // $m = ++$n; = 8
// $m = $n++;

//  echo $m . "\n" . $n;



//  example here

/**
 * $m = $n++;
 * $m = $n;
 * $n = $n + 1;
 * 
*/

/**
 * $m = ++$n;
 * $n = $n + 1;
 * $m = $n ;
 * 
*/





/**
 * 
 * Day: 01    CLASS: 1.9
 * 
 */

//  $decmeal = 12;
//  $binary = 12;
//  $octal = 112;
//  $hex = "6434";

//  printf("This is a Dacemal Number %d To %b \n", $decmeal, $binary );
//  printf("This is a Dacemal Number %d To %o \n", $decmeal, $octal );
//  printf("This is a Dacemal Number %d To %x \n", $decmeal, $hex );









/**
 * 
 * Day: 01    CLASS: 1.10
 * 
 */

//  $fname = "masud";

//  $lname = "Rana";

//  $middleName = "Dev";


// //  outpur data conditionaly

// printf('My Name Is %3$s %1$s %2$s', $fname, $lname, $middleName);

// echo "\n";

// // convert a one variable 2 number working 
// printf('This is a Octal Number %1$d, %1$x', 333);

// echo"\n";

// $n = 34.1245;

// printf('%.2f', $n);

// echo "\n";

// $t = 34.3452;

// printf('%07.2f', $t);






/**
 * 
 * Day: 01    CLASS: 1.11
 * 
 */


//  $number = 22;

//  $output = sprintf("This Is number %s", $number);

//  echo $output;




// condition in php 

// $age = 15;

// if( $age >= 13 and $age <= 19){
//     echo "this Person Is a Teenager";
// }else{
//     echo "this Person Not A Teenager";
// }



// heard condition in php 
// $year = 2000;

// if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
//     echo "{$year} is a Leap Year";
// }else if($year % 4 == 0 && $year % 100 == 0){
//     echo "{$year} is Not a Leap Year";
// }else if($year % 4 == 0){
//     echo "{$year} is a Leap Year";
// }else{
//     echo "{$year} is Not a Leap Year";
// }

// echo "\n";
// // online heard condition

// if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0 )){
//     echo "{$year} is a leap year";
// }else{
//     echo "{$year} is Not a leap year";
// }



// if else nessed condition 


// $conOne = true;
// $conTwo = true;
// $conThree = false;

// if($conOne){
//     if($conTwo){
//         if($conThree){
//             echo "Hello";
//         }else{
//             echo "Flase One";
//         }
//     }else{
//         echo "Flase Two";
//     }
// }else{
//     echo "Flase Three";
// }

// echo "\n";

// if($conOne && $conTwo && $conThree){
//     echo "Hello";
// }else if($conOne && $conTwo){
//     echo "True Two";
// }else{
//     echo "True One";
// }









/**
 * 
 * Day: 01    CLASS: 1.15
 * 
 */

//  $number = 33;

//  if( $number == 33){
//     echo "This number is True";
//  }else{
//     echo "This Number Not a True";
//  }

//  echo "\n";

// //  ternary oparetor width condition
//  $number = ($number == 33) ? "This NUmber True" : "This Number Not True";

// echo $number;

// echo "\n";

// $text = 22;

// $textPro = ($text <= 20) ? "This Number Is True" : "this Number Is a False";

// echo $textPro;



// && || and , || and or condition true and false

// $files = false || true; // true
// $ToFiles = false or true;   // ($ToFiles = false ) or true / $ToFiles = false

// var_dump($files);
// var_dump($ToFiles);



// for loop multipul value asiend here
for($i=0, $j= 10; $i <=10; $i++, $j--){
    echo $i . ":" . $j;
    echo"\n";
}