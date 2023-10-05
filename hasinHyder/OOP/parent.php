<?php 

class A{
    static function sayHi(){
        echo "Say Something One";
    }
}

class B extends A{
    static function sayHi(){
        echo "Say Something two";
        echo "\n";
        parent::sayHi();
    }
}
$newObj = new B();

B::sayHi();