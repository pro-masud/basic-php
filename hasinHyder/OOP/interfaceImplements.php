<?php
class DistrictCollection implements IteratorAggregate {
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
}

$newDistrict = new DistrictCollection;

// add new district
$newDistrict->addDistrict("Rangpur");
$newDistrict->addDistrict("Dinajpur");
$newDistrict->addDistrict("Thakurgong");
$newDistrict->addDistrict("Haripur");
$newDistrict->addDistrict("Pahargong");

// Iterate over districts using foreach loop
foreach ($newDistrict as $single) {
    echo $single . "\n";
}
?>
