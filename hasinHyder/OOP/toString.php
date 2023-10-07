<?php 

class Color{
    public $color;

    function __construct($color){
        $this -> color = $color;
    }

    function addColor(){
        return $this -> color;
    }

    function __toString(){
        return "this color is {$this -> color}.";
    }
}


$newColor = new Color("Red");

echo $newColor;