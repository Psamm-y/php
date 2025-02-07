<?php
require_once 'Employee.php';
class FullTimeEmployee extends Employee{
private $salary;

public function getSalary(){
  return $this->salary;
}

public function __construct($name, $employeeId, $salary){
  $this->name=$name;
  $this->employeeId=$employeeId;
  $this->salary=$salary;
}

public function calculatePay(){
 return "Full Time Employee: ". getSalary()."\n";
}
}
?>