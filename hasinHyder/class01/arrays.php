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

     $someText = "masud, rana, khirul, pathan, dobirul, hasan, kasim";

     $export = explode(", ", $someText);

    // output data for loops
    //  for($i = 0; $i< count($export); $i++){
    //     echo $export[$i] . "\n";
    //  }

    $strText = join(" ", $export);

    echo $strText;

?>