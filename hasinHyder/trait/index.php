<?php 
trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number Series A\n";
        // parent::numberSeriesA(); loading a number serices
    }

    function numberSeriesB(){
        echo "Number Series b\n";
    }
}

class SomeNumber{
    function numberSeriesA(){
        echo "Number Series A+B\n";
    }
}

class NumberSeries extends SomeNumber{
    use NumberSeriesOne;
}


$newSeries = new NumberSeries();
$newSeries -> numberSeriesA();