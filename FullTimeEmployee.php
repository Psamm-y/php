<?php
require_once 'Employee.php';
class FullTimeEmployee extends Employee{
private $salary;

public function __construct($name, $employeeId, $salary){
  $this->name=$name;
  $this->employeeId=$employeeId;
  $this->salary=$salary;
}
}
?>