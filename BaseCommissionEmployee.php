<?php
require_once 'CommissionEmployee.php';

class BasePlusCommissionEmployee extends CommissionEmployee{
  private $baseSalary;

  public function getBaseSalary(){
    return $this->baseSalary;
  }
   
  public function setBaseSalary(float $newSalary){
    if($newSalary < 0){
      throw new Exception("Base salary must be greater than 0");
    }
    $this->baseSalary = $newSalary;
  }

  //override earnings method
  public function earnings(){
    return $this->baseSalary + parent::earnings();
  }
  
  public function __construct($firstName, $lastName, $socialSecurityNumber,
   $grossSales, $commissionRate, $baseSalary){
    parent::__construct($firstName, $lastName, $socialSecurityNumber,
    $grossSales, $commissionRate);
    $this->setBaseSalary($baseSalary);
  }

  public function display(){
    echo "\n\nEmployee Details: " ."\n";
    echo "--------------------------------------------"."\n";
    echo "Name: " . $this->getFirstname() . " " . $this->getLastname()."\n";
    echo "Social Security Number: " . $this->getSocialsecuritynumber()."\n";
    echo "Gross Sales: " .  number_format($this->getGrosssales(),2)."\n";
    echo "Commission Rate: " . ($this->getCommissionrate() * 100 . "%\n");
    echo "Base Salary: " . number_format($this->getBaseSalary(),2)."\n";
    echo "Total Earnings: " . number_format($this->earnings(),2);

  }
}

//instance of Commision-Only Employee
$commisionOnlyEmployee = new CommissionEmployee("Samuel", "Ampadu","123-33-6942", 10000, 0.06);

//instance of BasePlusCommision Employee
$basePlusCommisionEmployee = new BasePlusCommissionEmployee("Samuel", "Ampadu","123-33-6942", 10000, 0.06, 5000);


echo "Commision-Only Employee Details: " . "\n";
$commisionOnlyEmployee->display();

echo "\n\nBase Salary + Commision Employee Details: " . "\n";
$basePlusCommisionEmployee->display();


$basePlusCommisionEmployee->setBaseSalary(6000);

$basePlusCommisionEmployee->display();
?>