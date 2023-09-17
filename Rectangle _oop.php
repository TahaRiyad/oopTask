<?php
class Rectangle {
    private $length;
    private $width;

    public function __construct() {
        $this->length = 1.0;
        $this->width = 1.0;
    }
    public function _construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
public function getLength(){
    return $this->length;
}
public function setLength($length){
    return $this->length;
}
public function getWidth(){
    return $this->width;
}
public function setWidth($width){
    return $this->width;
}

public function getArea() {
    return $this->length * $this->width;
}
public function getPerimeter() {
    return 2 * ($this->length + $this->width);
}

public function __toString() {
    return "Rectangle[length={$this->length}, width={$this->width}]";
}

}


$rectangle = new Rectangle();
echo $rectangle->getWidth();
echo "<br>";
echo $rectangle->getLength();
echo "<br>";

$rectangle = new Rectangle(7, 9);
echo $rectangle->getLength();
echo "<br>";
echo $rectangle->getWidth();
echo "<br>";
echo $rectangle->getArea();
echo "<br>";
echo $rectangle->getPerimeter();
echo "<br>";
echo $rectangle;
echo "<br>";
