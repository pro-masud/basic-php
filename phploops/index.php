<?php 
    // PHP IN LOOPS

    // while(){}

    // do(){}while()

    //for(){}

    //foreach(){}



    $users = [
        'name'  => "masud rana",
        'job'   => "PHP Developer",
        'skills'    => ["PHP", "JavaScript", "WordPress"]
    ];



    foreach($users as $key => $value){

        echo $key . ": ";

       if(is_array($value)){
            foreach($value as $skill){
                echo $skill;
            }
       }else{
           echo  $value;
       }

       echo "<br>";
    }
    
    


?>