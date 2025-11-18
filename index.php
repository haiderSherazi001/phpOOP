<?php

class Fruit{
    public  $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}

// $apple = new Fruit();
// $apple->color = "red";
// $apple->set_name("Apple");
// echo "The name of fruit is ".$apple->get_name();

$banana = new Fruit();
$banana->set_name("Banana");
$banana->set_color("Yellow");
echo "The name of the fruit is " . $banana->get_name() . " and the color of it is " . $banana->get_color() . ".";