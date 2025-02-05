<?php
class CommissionEmployee{
 private $firstName;
private $lastName;
private $socialSecurityNumber;
private $grossSales;
private $commissionRate;

public function getFirstname() {
  return $this->firstName;
}

public function setFirstname($firstName) {
  $this->firstName = $firstName;
}

public function getLastname() {
  return $this->lastName;
}

public function setLastname($lastName) {
  $this->lastName = $lastName;
}

public function getSocialsecuritynumber() {
  return $this->socialSecurityNumber;
}

public function setSocialsecuritynumber($socialSecurityNumber) {
  $this->socialSecurityNumber = $socialSecurityNumber;
}

public function getGrosssales() {
  return $this->grossSales;
}

//GrossSales setter to accept only values greater than 0
public function setGrosssales($grossSales) {
  if($grossSales < 0){
    throw new Exception("Gross sales must be greater than 0");
  }
  $this->grossSales = $grossSales;
}

public function getCommissionrate() {
  return $this->commissionRate;
}

//Commission rate  setter to accept values between 0 and 1 only 
public function setCommissionrate($commissionRate) {
  if($commissionRate<0.0 || $commissionRate>1.0){
    throw new Exception("Commission rate must be between 0 and 1");
  }
  $this->commissionRate=$commissionRate;
}

//constructor with validation 
  public function __construct($firstName, $lastName, $socialSecurityNumber, $grossSales, $commissionRate){
  $this->setFirstname($firstName);
  $this->setLastname($lastName);
  $this->setSocialsecuritynumber($socialSecurityNumber);
  $this->setGrosssales($grossSales);
  $this->setCommissionrate($commissionRate);
  }

  public function earnings(){
    return $this->commissionRate * $this->grossSales;
  }

  public function display(){
    echo "Employee Details: " ."\n";
    echo "--------------------------------------"."\n";
    echo "Name: " . $this->getFirstname() . " " . $this->getLastname()."\n";
    echo "Social Security Number: " . $this->getSocialsecuritynumber()."\n";
    echo "Gross Sales: " .  number_format($this->getGrosssales(),2)."\n";
    echo "Commission Rate: " . ($this->getCommissionrate() * 100 . "%\n");
    echo "Earnings: " . number_format($this->earnings(),2);

  }

}


?>