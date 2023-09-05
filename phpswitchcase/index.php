<?php 
    // PHP IN SWITCH CASE

    $users = [1, 2, 3, 4, 5];


    // foreach($users as $user){
    //     switch($user){
    //         case 1:
    //             echo 1;
    //             break;
    
    //         case 2:
    //             echo 2;
    //             break;
            
    //         case 3:
    //             echo 3;
    //             break;
    //         case 4:
    //             echo 4;
    //             break;

    //         case 5:
    //             echo 5;
    //             break;
                
    //         default: 
    //             echo "this is Unknown";
    //             break;
    
    //     }

    //     echo "<br>";
    // }
    


    // 
    // switch VS match function
    // 

    $number = 3;

    $productItem = match($number){
        1 => "1",
        2 => "2",
        3 => "3",
        4 => "4",
        5 => "5",
        0 => "Unkwon Key Value"
    };

    echo $productItem;
    


?>