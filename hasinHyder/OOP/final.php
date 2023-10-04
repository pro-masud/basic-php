<?php

use ChildClass as GlobalChildClass;

class doSomething{
    public $name = "masud rana";
    final public function doSomething(){
        echo "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, quod!";
    }
}

class childClass extends doSomething{
    final public function pro(){
        echo "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, quod!";
    }
}

$newMethod = new GlobalChildClass();

$newMethod -> doSomething();
