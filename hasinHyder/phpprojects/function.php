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


     function selectOption($options, $selectedVal){
        foreach($options as $option){
            $option = strtolower($option);
            $selected = '';
            if(in_array($option, $selectedVal)){
                $selected = "selected";
            }
            printf('<option value="%s" %s >%s</option>',$option ,  $selected,  ucwords($option));
        }
     }





?>