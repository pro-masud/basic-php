<?php 

// time counting here now
// echo time();    //1696155771
// echo microtime(true); //1696155833.0876
// echo microtime(false); //1696155833.0876
// echo "\n";
// echo date('d/m/y');  // output result is: 01/10/23
// echo date('d/m/Y');  // output result is: 01/10/2023
// echo date('d/F/Y');  // output result is: 01/October/2023
// echo date('d/F/Y');  // output result is: 01/October/2023

// startTime here 
$startTime = microtime(true);
factorial(100);
sleep(2);
$endTime = microtime(true);

$fainalResult = $endTime - $startTime;

printf("%10.8f", $fainalResult);


//create a number factorial numbers
function factorial($n){
    $result = 1; 
    for ($i = 1; $i<$n; $i++){
        $result *= $i;
    }
    return $result;
}
