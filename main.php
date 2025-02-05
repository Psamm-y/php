<?php
require_once 'CommissionEmployee.php';

//initial instance of class 
$employee= new CommissionEmployee("Samuel", "Ampadu","123-33-6942", 10000, 0.06);

$employee->displayDetails();

//update employee's grossSales and commisionRate
$employee->setGrosssales(7600);
$employee->setCommissionrate(0.23);

//Display updated results
$employee->display();

?>