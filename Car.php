<?php
require_once 'Vehicle.php';
class Car extends Vehicle{
  private $fuelEfficiency;

  public function __construct($vehicleId, $model, $fuelLevel, $fuelEfficincy){
    parent::__construct($vehicleId, $model, $fuelLevel);
    $this->fuelEfficiency = $fuelEfficincy;
  }

  public function calculateRange(){
    $range=$this->fuelLevel * $this->fuelEfficiency;
    echo "The range of the car ($this->model) is $range km\n";
    return range;
  }
}

//car objecct
$car = new Car("C001","Sedan",50,15);

//refuel Sedan
$car->refuel(10);

//Transportation manager object
$manager = new TransportationManager();

$manager->operateVehicle($car);
?>