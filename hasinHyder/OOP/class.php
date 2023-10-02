<?php 

//  ক্লাসের পাবলিক এবং প্রাইভেট মেথড

class Fund{
    private $fund;

    function __construct($initialFund = 0){
        $this ->fund = $initialFund;
    }

    public function addFund($money){
        $this -> fund += $money;
    }


    public function deductFund($money){
        $this -> fund -= $money;
    }

    public function totalFund(){
        echo "Total fund is {$this -> fund}.";
    }


}

$Ofund = new Fund(100);

$Ofund -> addFund(10);
echo "\n";
$Ofund -> totalFund(100);
echo "\n";
$Ofund -> deductFund(9);
echo "\n";
$Ofund -> totalFund(100);