<?php 

    $num = '';


    // student array here
    $studnets = [
        "masud",
        "rana",
        "mursalim",
        "alok",
        "papiya",
    ];

    $n = count($studnets);
    for($i = 0; $i < $n; $i++ ){
        echo $studnets[$i] . "\n";
    }


?>