<?php
abstract class Employee{
  protected $name;
  protected $employeeId;

public function __construct($name, $employeeId){
  $this->name = $name;
  $this->employeeId = $employeeId;
}
}


?>