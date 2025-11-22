<?php

abstract class Shape{
    abstract public function getArea();
    public function describe(){
        echo "This is a shape.";
    }
}
class Circle extends Shape{
    public $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function getArea(){
        return 3.14*$this->radius*$this->radius;
    }
    public function describe(){
    echo "This is a ". get_class($this).".<br>";
    }
}
class Rectangle extends Shape{
    public $height;
    public $width;
    public function __construct($height,$width){
        $this->height = $height;
        $this->width = $width;
    }
    public function getArea(){
        return $this->height*$this->width;
    }
    public function describe(){
    echo "This is a ". get_class($this).".<br>";
    }
}

$c1 = new Circle(5);
echo "the area of the circle is {$c1->getArea()} <br>";
$r1 = new Rectangle(4,5);
echo "the area of the rectangle is {$r1->getArea()}<br>";

$c1->describe();
$r1->describe();

?>