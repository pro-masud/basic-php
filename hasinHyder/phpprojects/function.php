<?php 
    /**
     * create a ckecked function here
     * */ 

     function isChecked($ckecdArray, $value){
        if(isset($_REQUEST[$ckecdArray]) && is_array($_REQUEST[$ckecdArray]) && in_array($value, $_REQUEST[$ckecdArray])){
            echo " checked ";
        }
     }






?>