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


     $studnets = [
        "masud",
        "rana",
        "mursalim",
        "alok",
        "papiya",
    ];

    $newStudent = ["kamal"];

    // array_push($studnets, "kamal", "jamal", "khali kothai akon");  array te data last a pathanor jno
    // $studnets[] = "jamal";
    // array_unshift($studnets, "promasud", "Dev Mausd", "goal Masud", "Jani Nah Masud Rana");  array data add to first here now
   

    for($i = 0; $i < count($studnets); $i++){
        echo $studnets[$i] . "\n";
    }

    // $cutData = array_shift($studnets);
    // $cutData = array_pop($studnets);
?>