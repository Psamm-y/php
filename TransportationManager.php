<?php
class TransportationManager{
  public function operateVehicle(Vehicle $vehicle){
    $vehicle->calculateRange();
  }
}
?>