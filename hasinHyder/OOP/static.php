<?php 
class numberMath{
    static $name;

    static function addNumber($name){
        self::$name = $name;
        self::doSomething();
        echo "this is a static method";
    }

    static function doSomething(){
        echo "Do Something here";
    }

    public function finalOparetion(){
        $this -> doSomething();
        $this -> name = "masud rana";
    }
}

numberMath::addNumber("masud rana");
echo "\n";
echo numberMath::$name;