<?php

class Employee {
    private $id;
    private $firstName;
    private $lastName;
    private $salary;

    public function __construct($id, $firstName, $lastName, $salary) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function raiseing_Salary($percent) {
        $this->salary += $this->salary * ($percent / 100);
        return $this->salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getAnnualSalary() {
        return $this->salary * 12;
    }

    public function __toString() {
        return "Employee [id={$this->id}, name={$this->getName()}, salary={$this->salary}]";
    }
}

$employee = new Employee(1, "Taha", "Riyad", 15000);
echo $employee->getFirstName(); 
echo "<br>";
echo $employee->getLastName(); 
echo "<br>";
echo $employee->getName(); 
echo "<br>";
echo $employee->getSalary(); 
echo "<br>";

$employee->raiseing_Salary(15);
echo $employee->getSalary(); 
echo "<br>";

$employee->setSalary(12000);
echo $employee->getSalary(); 
echo "<br>";

echo $employee->getAnnualSalary(); 
echo "<br>";

echo $employee; 
echo "<br>";

?>