<?php

/*

1. Car class

Properties:

make (e.g., Toyota)

model (e.g., Corolla)

year

available (boolean → true/false)

Constructor:

Initialize all properties.

available should be true by default.

Methods:

rent() → sets available = false

If already rented → echo “Car already rented.”

returnCar() → sets available = true

2. Customer class

Properties:

name

rentedCar (can be a Car object or null)

Constructor initializes name and sets rentedCar = null.

Methods:

rentCar(Car $car)

If customer already has a rented car → echo “Return your current car first.”

If car is available → rent it and assign to $this->rentedCar

returnCar()

If no car → echo “You have no car to return.”

Else return it and set rentedCar = null

3. CarRental class

This will manage the system.

Properties:

cars = [] (array of Car objects)

Methods:

addCar(Car $car)

listAvailableCars()

listAllCars()

findCar($model) → return the Car object or null

🎯 Goal Script

Your main script should:

Create at least 4 car objects

Add them to the rental system

Create 2 customers

Customer 1 rents a car

Customer 2 tries renting the same car (should fail)

Customer 1 returns the car

Customer 2 rents it successfully

List all cars and their availability status

*/



class Car{
    public $make;
    public $model;
    public $year;
    public $available;
    
    function __construct($make,$model,$year,$available=TRUE){
        $this->make=$make;
        $this->model=$model;
        $this->year=$year;
        $this->available=$available;
    }
    function rent(){
        if ($this->available == false){
            echo "This car is rented already!!";
            return;
        }
        $this->available = false;
    }
    function returnCar(){
        $this->available = true;
    }
}

class Customer{
    public $name;
    public $rentedCar;
    function __construct($name,$rentedCar=NULL){
        $this->name = $name;
        $this->rentedCar = $rentedCar;
    }
    function rentCar(Car $car){
        if($this->rentedCar){
            echo "Return your current car first!!!<br>";
            return;
        }
        elseif(!$car->available){
            echo "Sorry the car is not available!!!<br>";
            return;
        }
        else{
            echo "This car is available for rent. Thank You!!!<br>";
            $this->rentedCar = true;
            $car->available = false;
            return;
        }

    }
}

class carRental{
    public $cars = [];
    function addCar(Car $car){
        $this->cars[] = $car;
        echo "Car added successfully!!!!<br>";
        return;
    }
    function listAvailableCars(){
        echo "The list of available cars is:<br>";
        echo "<ol>";
        foreach($this->cars as $car){
            if($car->available){
            echo "<li>{$car->make}, {$car->model}, {$car->year}.</li>";
            }
        }
        echo "</ol>";
    }
    function listAllCars(){
        if(empty($this->cars)){
            echo "The are no cars!!!";
            return;
        }
        echo "The list of all cars is:<br>";
        echo "<ol>";
        foreach($this->cars as $car){
            echo "<li>$car</li>";
        }
        echo "</ol>";
    }
    function findCar($model){
        if(empty($this->cars)){
            echo "The are no cars in the list!!!";
            return;
        }
        foreach($this->cars as $car){
            if($car->$model === $model){
                return $car;
            }
        }
        return NULL;
    }
}

$car1 = new Car("Toyota","Corolla","2010");
$car2 = new Car("Honda","City","2022");
$car3 = new Car("Toyota","Cross","2024");
$car4 = new Car("Suzuki","Alto","2025");
?>