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

public function displayDetails(){
  echo "Name: $this->name\n";
  echo "Employee ID: $this->employeeId\n";
  echo "Salary: $this->salary\n";
  
}
}

//full time employee object
$fullTimeEmployee= new FullTimeEmployee("John", "F001", 50000);
?>