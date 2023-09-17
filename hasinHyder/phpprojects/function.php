<?php 
    /**
     * create a ckecked function here
     * */ 

     function isChecked($ckecdArray, $value){
        if(isset($_REQUEST[$ckecdArray]) && is_array($_REQUEST[$ckecdArray]) && in_array($value, $_REQUEST[$ckecdArray])){
            echo " checked ";
        }
     }


    /**
     * 
     * create a select option this function
     * 
     * */  


     function selectOption($options){
        foreach($options as $option){
            printf('<option value="%s">%s</option>', strtolower($option), ucwords($option));
        }
     }





?>