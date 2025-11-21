<?php
class Car{
    const TYPE_SEDAN = 'sedan';
    const TYPE_SUV = 'suv';
    const TYPE_TRUCK = 'truck';
    private $type;
    public function __construct($type){
        $this->type = $type;
    }
    public function getType(){
        echo "$this->type";
    }
}

$hilux = new Car('truck');
$brv = new Car('suv');
$corolla = new Car('sedan');
// $hilux->getType();

echo Car::TYPE_SEDAN;
?>