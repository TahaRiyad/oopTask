<?php

class Circle {
    private $radius = 1.0;
    private $color = "red";
    
    public function __construct($radius = 1.0, $color = "red") {
        $this->radius = $radius;
        $this->color = $color;
    }
    
    public function getRadius() {
        return $this->radius;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
    
    public function toString() {
        return "Circle[radius=" . $this->radius . ", color=" . $this->color . "]";
    }
}
$circle1 = new Circle(); 
echo $circle1->getRadius(); 
echo "<br>";
echo $circle1->getColor();
echo "<br>";
echo $circle1->getArea(); 
echo "<br>";
$circle1->setRadius(5);
$circle1->setColor("red");
echo $circle1->getRadius(); 
echo "<br>";
echo $circle1->getColor(); 
echo "<br>";
echo $circle1->toString(); 
echo "<br>";







?>