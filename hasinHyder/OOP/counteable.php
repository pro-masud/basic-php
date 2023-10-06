<?php
class DistrictCollection implements IteratorAggregate, Countable{
    private $districts;

    public function __construct() {
        $this->districts = [];
    }

    public function addDistrict($district) {
        array_push($this->districts, $district);
    }

    public function getIterator(): Traversable {
        return new ArrayIterator($this->districts);
    }

    public function count():int{
        return count($this -> districts);
    }
}

$newDistrict = new DistrictCollection;

// add new district
$newDistrict->addDistrict("Rangpur");
$newDistrict->addDistrict("Dinajpur");
$newDistrict->addDistrict("Thakurgong");
$newDistrict->addDistrict("Haripur");
$newDistrict->addDistrict("Pahargong");

echo count($newDistrict);
echo "\n";

// Iterate over districts using foreach loop
foreach ($newDistrict as $single) {
    echo $single . "\n";
}
?>
