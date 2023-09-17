<?php

class Circle {
    private $radius = 1.0;

    private $color = "red";

    public function __construct($radius = 1.0) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}



$circle1 = new Circle();
echo $circle1->getRadius(); 
echo "<br>";

echo $circle1->getArea(); 
echo "<br>";

$circle2 = new Circle(5); 
echo $circle2->getRadius(); 
echo "<br>";

echo $circle2->getArea(); 
echo "<br>";
