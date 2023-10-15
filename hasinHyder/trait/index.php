<?php 
trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number Series A\n";
    }

    function numberSeriesB(){
        echo "Number Series b\n";
    }
}

class NumberSeries{
    use NumberSeriesOne;
    /* dubell inicialize method */ 
    function numberSeriesA(){
        echo "Number Series A+A\n";
    }
}


$newSeries = new NumberSeries();

$newSeries -> numberSeriesA();