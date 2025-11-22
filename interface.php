<?php
interface Shape{
    public function calculateArea();
}
class Circle implements Shape{
    private $radius;
    private const PI = 3.14;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function calculateArea(){
        return self::PI * $this->radius * $this->radius;
    }
}
class Rectangle implements Shape{
    private $height;
    private $width;
    public function __construct($height,$width){
        $this->height = $height;
        $this->width = $width;
    }
    public function calculateArea(){
        return $this->height * $this->width;
    }
}

$c1 = new Circle(4.5);
$r1 = new Rectangle(4.7,5.5);
echo "The area of the given circle is ".$c1->calculateArea().". <br>";
echo "The area of the given rectangle is ".$r1->calculateArea().". <br>";


?>