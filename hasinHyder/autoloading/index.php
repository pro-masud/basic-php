<?php 
/**
 * class Autoloading systems
 * */ 
function autoload($fileName){
    // include strtolower("{$fileName}.php");
    include strtolower("projects/{$fileName}.php");
}

// register for spl_autoload_register() Method
spl_autoload_register("autoload");

// (new Jupitar) -> ageName();
(new Projects) -> projects();

