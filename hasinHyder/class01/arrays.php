<?php 

    // $num = '';


    // student array here
    // $studnets = [
    //     "masud",
    //     "rana",
    //     "mursalim",
    //     "alok",
    //     "papiya",
    // ];

    // $n = count($studnets);
    // // for($i = 0; $i < $n; $i++ ){
    // //     echo $studnets[$i] . "\n";
    // // }

    // for($i = $n - 1; $i >  1; $i--){
    //     echo $studnets[$i] . "\n";
    // }


        
    /**
     * Now Working This Function => array_pop(), array_shift(), array_push, array_unshift() 
     * 
     * */ 


    //  $studnets = [
    //     "masud",
    //     "rana",
    //     "mursalim",
    //     "alok",
    //     "papiya",
    // ];

    // $newStudent = ["kamal"];

    // // array_push($studnets, "kamal", "jamal", "khali kothai akon");  array te data last a pathanor jno
    // // $studnets[] = "jamal";
    // // array_unshift($studnets, "promasud", "Dev Mausd", "goal Masud", "Jani Nah Masud Rana");  array data add to first here now
   

    // for($i = 0; $i < count($studnets); $i++){
    //     echo $studnets[$i] . "\n";
    // }

    // $cutData = array_shift($studnets);
    // $cutData = array_pop($studnets);






    // array data within multipul data output
    
    // $studnets = ['masud rana', 'rana hosan', 'khalid hasan','ajim','php'];

    // $number = count($studnets);

    // for( $i= 0; $i < $number; $i++ ){
    //     echo $studnets[$i]  . "\n";
    // }


    // assoceative array working

    // $students = [
    //     "id" => 01,
    //     "name"  => "masud Rana",
    //     "age"   => 22,
    //     "location"  => "dinajpur",
    //     "skills"    => "php Developer",
    // ];



    // foreach( $students as $kay => $value){
    //     echo "{$kay}: {$value}" . "\n";
    // }


    // $keys = array_keys($students);

    // for($i = 0; $i < count($keys); $i++){
    //     echo $students[$keys[$i]]."\n";
    // }


    // $values = array_values($students);

    // for($i = 0; $i < count($values); $i++){
    //     $value = $values[$i] . "\n";
    //     echo $value;
    // }

    // $users = [
    //     "id" => 01,
    //     "name"  => "masud Rana",
    //     "job"   => "wordpress developer",
    //     "location"  => "Dinajpur",
    // ];

    // $keys = array_keys($users);

    // for($i = 0; $i < count($keys); $i++){
    //     echo $users[$keys[$i]] . "\n";
    // }   


    // $users = [
    //     "id" => 01,
    //     "name"  => "masud Rana",
    //     "job"   => "wordpress developer",
    //     "location"  => "Dinajpur",
    // ];


    // $values = array_values($users);

    // for($i = 0; $i < count($values); $i++){
    //     $value = $values[$i];
    //     echo $value . "\n";
    // }


    // $users = [
    //     "id" => 01,
    //     "name"  => "masud Rana",
    //     "job"   => "wordpress developer",
    //     "location"  => "Dinajpur",
    // ];

    // foreach( $users as $key => $value){
    //     echo $key . ": ". $value . "\n";
    // }








    /**
     * How to convert a string to array and array to starting 
     * 
     * */ 

    //  $someText = "masud, rana, khirul, pathan, dobirul, hasan, kasim";

    //  $export = explode(", ", $someText);

    // // output data for loops
    // //  for($i = 0; $i< count($export); $i++){
    // //     echo $export[$i] . "\n";
    // //  }

    // $strText = join(" ", $export);

    // echo $strText;









    
    /**
     * how to create a multi deimoncial array
     * 
     * */ 


    //  $users = [
    //     'userOne' => [
    //         'userTwo'   => [
    //             'userThree' => ['masud', 'khan', 'Anik', 'alok'],
    //         ],
    //     ],
    //  ];


    // //  echo $users['userOne']['userTwo']['userThree']['2'];

    // $values = array_values($users['userOne']['userTwo']['userThree']);

    // for($i = 0; $i < count($values); $i++){
    //     $value = $values[$i];
    //     echo $value . "\n";
    // }










      /**
     * array data to serialize() and unserialize() , json_cncode() and json_decode()
     * 
     * */ 


    //  $student = [
    //     "id" => 01,
    //     "name"  => "masud rana",
    //     "age"   => 22,
    //     "job"   => "PHP Developer",
    //     "location"  => "dinajpur",

    //  ];

    // // output data 
    //  print_r($student);

    // $serializeData = serialize($student);
    // echo $serializeData;
    //  echo "\n";
    // $unserializeData = unserialize($serializeData);

    // print_r($unserializeData);


    // echo "\n";

    // $jsonData = json_encode($student);

    // echo $jsonData;

    // echo "\n";

    // $jsonDecodeData = json_decode($jsonData, true);
    //  echo "\n";
    // print_r($jsonDecodeData);










    /**
     * ৩.৭ - কপি বাই ভ্যালু এবং কপি বাই রেফারেন্স
     * */ 

    //  $someData = [
    //     "fname" => "DJ Chad",
    //     "lname" => "Alo K Panda"
    //  ];


    //  $newData = $someData;
    //  $newData['lname']  = "Arjun";


    //  print_r($someData);
    //  print_r($newData);









    /**
     * array_key unset() remove array key 
     * */ 

    //  $someData = [
    //     "fname" => "DJ Chad",
    //     "lname" => "Alo K Panda"
    //  ];

    //  print_r($someData);
     
    // unset($someData['lname']);

    // print_r($someData);









    // /**
    //  * array array_slice() working this chapter now
    //  * */ 

    //  $arrayData =  ['masud rana', 'rana hosan', 'khalid hasan','ajim','php'];

    // print_r($arrayData);

    // echo "\n";

    // // $newData = array_slice($arrayData, 1);
    // // $newData = array_slice($arrayData, 1, 3);
    // // $newData = array_slice($arrayData, 1, 3, true);    // data show current key postion in array data
    // $newData = array_slice($arrayData, 1, 3, true);    // data show current key postion in array data

    // print_r($newData);











    /**
     * array array_splice() working this chapter now
     * */ 

    //  $arrayData =  ['masud rana', 'rana hosan', 'khalid hasan','ajim','php'];

    // $updateData = ['JavaScript', 'Go', "TypeScript"];

    // // $newData = array_splice($arrayData, 2);
    // // $newData = array_splice($arrayData, 2, 3);
    // $newData = array_splice($arrayData, 2, 3, $updateData);
    // print_r($newData);

    // print_r($arrayData);









     /**
     * array array_merge() function working
     * */ 


      // $arrayData =  ['masud rana', 'rana hosan', 'khalid hasan','ajim','php', 'javascript', 'go'];


    //   print_r($arrayData);

    //   $arrayDataOne = array_slice($arrayData, 0, 3);
    //   $arrayDataTwo = array_slice($arrayData, 3);
    
    // //  print_r($arrayDataOne);
    // //  print_r($arrayDataTwo);

    // $arrayDataPlas = array_merge($arrayDataOne, $arrayDataTwo);

    // print_r($arrayDataPlas);








    
     /**
     * array array_search(), in_array(), key_exists()
     * */


     $arrayData =  ['masud rana', 'rana hosan', 'khalid hasan','ajim','php', 'javascript', 'go'];

     $number = [1, 4,3, 6,7, 45, 9, 33, 23, 99];
     $keyNumbers = [
        "a" => 1,
        "b" =>  4,
        "c" => 3,
        "d" => 6,
        "e" => 7,
        "f" => 99];


    //  if(in_array(9, $number, true)){
    //     echo "number is exists now";
    //  }else{
    //     echo "Not Much This Array Value";
    //  }


    // if(array_search(99, $number, true)){
    //   echo "This Number is a Right";
    // }else{
    //   echo "This Number Is Not Right";
    // }

    // $keyNumbers = [
    //   "a" => 1,
    //   "b" =>  4,
    //   "c" => 3,
    //   "d" => 6,
    //   "e" => 7,
    //   "f" => 99];

    // if(key_exists("b", $keyNumbers)){
    //     echo "This key Exists ??";
    // }
     






/**
 * array_intersect()   array এর ভ্যালু সাথে মিলবে সে গুলো রিটার্ন করবে
 * array_intersect_assoc()
 *  array_diff()  array এর ভ্যালু সাথে মিলবে না সে গুলো রিটার্ন করবে
 *  array_diff_assoc()
 * */

     
      
    // $keyNumbers = [ "a" => 1, "b" =>  4, "c" => 3, "d" => 6, "e" => 7, "f" => 99 ];
    // $numberOne = [ 1, 6, 5, 8, 3, 6, 0, 9, 3, 2, 9];
    // $numberTwo = [ 1, 2, 3, 4, 2, 65, 234, 6, 8, 9, 7];


    // // $MuchValue  = array_intersect($numberOne , $keyNumbers);
    // // $MuchValue  = array_intersect_assoc($numberOne , $numberTwo);
    // // print_r($MuchValue);



    // // $noMuchValue = array_diff($numberOne, $numberTwo);
    // $noMuchValue = array_diff_assoc($numberOne, $numberTwo);

    // print_r($noMuchValue);









/**
* array_walk($array_var, “fun_name”)
* array_map(“fun_name”, $array_var)
* array_filter($array_var, “fun_name”)
* */


$numberOne = [ 1, 6, 5, 8, 3, 6, 0, 9, 3, 2, 9];
$numberTwo = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


// function squaer($n){
//   printf("this number is %s squer %s"."\n", $n, $n * $n);
// }
// $sQuaer = array_walk($numberTwo, 'squer');
// print_r($sQuaer);

function cube($n){
  return $n * $n * $n;
}

// $newArray = array_map("cube", $numberTwo);

function event($n){
  return $n % 2 == 0;
}

function odd($n){
  return $n % 2 == 1;
}

// $newArray = array_filter($numberTwo, "event");
// $newArray = array_filter($numberTwo, "odd");

// print_r($newArray);


// more filter array action


// $nameArray = ['masud', 'masruf', 'maruf', 'rana', 'mursalim', 'khirul', 'islam', 'pathor'];

// function filtering($n){
//   return $n[0] == 'p';
// }

// $newArray = array_filter($nameArray, 'filtering');

// print_r($newArray);



// $numberTwo = [ 1, 2, 3, 4, 5];

// function someArray($old, $new){
//   return $old + $new;
// }

// $newArrayValue = array_reduce($numberTwo, 'someArray');

// echo $newArrayValue;







/**
 * list() function working here now
*/

// $mainArray = ['masud', 'rana', 'kasim', 'kamal'];

// list($masud, $rana, $kasim, $kamal)  = $mainArray;

// echo $masud;
// echo "\n";
// echo $rana;
// echo "\n";
// echo $kasim;
// echo "\n";
// echo $kamal;







/**
 * range() function working here now
*/


// $emptyArray = [];

// for($i = 0; $i < 30; $i++){
//   array_push($emptyArray, $i);
// }


// $arrayData = range(1, 20, 2);

// foreach( range(0, 20, 2) as $singleNumber){
//   echo $singleNumber."\n";
// }

// print_r($arrayData);









/**
 * mt_rand() function working 
*/

$rangeNumber = range(0, 999);

$randomNumber = mt_rand(0, 999);
echo $rangeNumber[$randomNumber];
// print_r($rangeNumber);
    
?>