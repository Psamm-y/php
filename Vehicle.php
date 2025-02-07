<?php
  abstract class Vehicle{
    protected $vehicleId;
    protected $model;
    protected $fuelLevel;

    public function __construct($vehicleId, $model, $fuelLevel){
      $this->vehicleId = $vehicleId;
      $this->model = $model;
      $this->fuelLevel = $fuelLevel;
    }

    public function refuel($litres){
      $this->fuelLevel += $litres;
      echo "Refueled $litres litres. New fuel Level: $this->fuelLevel\n";
    }

    abstract public function calculateRange();
  }
?>