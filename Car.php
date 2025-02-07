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
?>