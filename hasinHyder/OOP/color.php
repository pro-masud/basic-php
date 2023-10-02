<?php 
// class RGB{
//     private $color;
//     private $red;
//     private $green;
//     private $blue;

//     public function __construct($colorCode = ''){
//         $this -> color = ltrim($colorCode, "#");
//         $this -> parseColor();
//     }      

//     public function getColor(){
//         return $this -> color;
//     }

//     public function setColor($colorCode){
//         $this -> color = ltrim($colorCode, "#");
//         $this -> parseColor();
//     }

//     private function parseColor(){
//         if($this -> color){
//             $colors = sscanf($this -> color, '%02x%02x%02x');
//             print_r($colors);
//         }
//     }
// }


// // create rgb new object here 

// $myColor = new RGB();

// $myColor -> setColor('#ff0000');



// starting color code to rgb convert here now

// class RGB{
//     private $color;
//     private $red;
//     private $green;
//     private $blue;

//     public function __construct($colorCode = ''){
//         $this -> color = ltrim($colorCode, "#");
//         $this -> fainalColorCode();
//     }

//     public function getColor(){
//         return $this -> color; 
//     }

//     public function getRGBColor(){
//         return [$this -> red, $this -> green, $this -> blue];
//     }

//     public function readRGBColor(){
//         echo "Red: {$this -> red} ";
//         echo "Green: {$this -> green} ";
//         echo "Blue: {$this -> blue} ";
//     }

//     public function setColor($colorCode){
//         $this -> color = ltrim($colorCode, "#");
//         $this -> fainalColorCode();
//     }

//     private function fainalColorCode(){
//         if($this -> color){
//             $colors = sscanf($this -> color, "%02x%02x%02x");

//            list($this -> red, $this -> green, $this -> blue) = $colors;
//         }else{
//             list($this -> red, $this -> green, $this -> blue) = [0,0,0];
//         }
//     }

//     public function getRed(){
//         return $this -> red;
//     }

//     public function getGreen(){
//         return $this -> green;
//     }

//     public function getBlue(){
//         return $this -> green;
//     }
// }

// $newColor = new RGB("#ff00f0");

// // $newColor -> setColor("");

// $newColor -> readRGBColor();



// create colorcode convert to rgb color code here 

class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = ''){
        $this -> color = ltrim($colorCode, "#");
        $this -> fianlColorCode();
    }

    public function getColor(){
        return $this -> color;
    }

    public function setRGBColor(){
        return [$this -> red, $this -> green, $this -> blue];
    }

    public function readRGBColor(){
        echo "Red: {$this -> red} ,\nGreen: {$this -> green},\n Blue: {$this -> blue}";
    }

    public function setColor($colorCode){
        $this -> color = ltrim($colorCode, "#");
        $this -> fianlColorCode();
    }

    private function fianlColorCode(){
        if($this -> color){
            $colors = sscanf($this -> color, "%02x%02x%02x");
            list($this -> red, $this -> green, $this -> blue) = $colors;
           
        }else{
            list($this -> red, $this -> green, $this -> blue) = [0,0,0];
        }
    }

    public function getRed(){
        return $this -> red;
    }

    public function getGreen(){
        return $this -> green;
    }

    public function getBlue(){
        return $this -> blue;
    }


}


$newColors = new RGB("#ff00f0");

$newColors -> readRGBColor();