<?php 

// //time counting here now
// echo time();    //1696155771
// echo microtime(true); //1696155833.0876
// echo microtime(false); //1696155833.0876
// echo "\n";
// echo date('d/m/y');  // output result is: 01/10/23
// echo date('d/m/Y');  // output result is: 01/10/2023
// echo date('d/F/Y');  // output result is: 01/October/2023
// echo date('d/F/Y');  // output result is: 01/October/2023

// //startTime here 
// $startTime = microtime(true);
// factorial(100);
// sleep(2);
// $endTime = microtime(true);

// $fainalResult = $endTime - $startTime;

// printf("%10.8f", $fainalResult);


// //create a number factorial numbers
// function factorial($n){
//     $result = 1; 
//     for ($i = 1; $i<$n; $i++){
//         $result *= $i;
//     }
//     return $result;
// }

// servera time zone set kore dibo ai khane 
// date_default_timezone_set("Asia/Dhaka");

// echo date('dS m, Y'); // 02nd 10, 2023
// echo date('d M, Y'); // 02 Oct, 2023
// echo date('d M, Y h:i:s'); // 02 Oct, 2023 01:05:10 am and pm here
// echo date('d M, Y H:i:s'); // 02 Oct, 2023 01:06:53
// echo date('d M, Y h:i:s a'); // 02 Oct, 2023 01:07:47 am
// echo date('d M, Y h:i:s A'); //02 Oct, 2023 01:08:16 AM
// echo date('z'); // get to day in this years
// echo date('z'); // get to day in this years


// echo time();
// echo mktime(0,0,0,10,02,2023);
date_default_timezone_set('Asia/Dhaka');
echo  gmmktime(0,0,0,12,12,2023);


// echo mktime(0,0,0,01,05,2001);
// echo "\n";
// echo strtotime("now");
// echo "\n";
// echo strtotime("+3days");
// echo "\n";
// echo strtotime("+2 weeks 7days 24 hours 86400 seconds") - strtotime("now");
// echo "\n";
 
// echo date('H:i:s ', strtotime('01 May 2001 12:12:08 PM'));
  