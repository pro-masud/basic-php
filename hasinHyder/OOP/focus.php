<?php 

class Shpae{

}

class Shape{
    public $shapes;

    public function __construct(){
        $this -> shapes = [];
    }

    public function addShape(Shpae $shape){
        array_push($this -> shapes, $shape);
    }

    public function totalShape(){
        return count($this -> shapes);
    }
}

class shapeOne extends Shpae{

}

class shapeTwo extends Shpae{
    
}

 class students extends Shpae{

 }


 $newShape = new Shape();

  $newShape -> addShape(new shapeOne);
  $newShape -> addShape(new shapeTwo);
  $newShape -> addShape(new students);
 echo $newShape -> totalShape();