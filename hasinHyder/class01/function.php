<?php 


function isEvent($num){
    if( $num % 2 == 0 ){
        return true;
    }
    
    return false;
}

$x = 11;

if(isEvent($x)){
    echo " {$x}Event Number";
}else{
    echo "{$x} Odd Number";
}


?>