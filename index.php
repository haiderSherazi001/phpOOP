<?php
// $b = '<hr>';
// class Fruit{
//     public  $name;
//     public $color;

//     function set_name($name){
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }
//     function set_color($color){
//         $this->color = $color;
//     }
//     function get_color(){
//         return $this->color;
//     }
// }

// $apple = new Fruit();
// $apple->color = "red";
// $apple->set_name("Apple");
// echo "The name of fruit is ".$apple->get_name();

// $banana = new Fruit();
// $banana->set_name("Banana");
// $banana->set_color("Yellow");
// echo "The name of the fruit is " . $banana->get_name() . " and the color of it is " . $banana->get_color() . ".";
// echo "<br>";

//checking if obj belong to class or not

// var_dump($banana instanceof Car);


//                      constructor  and  destructor

// class car{
//     public $name;
//     public $model;
//     public $color;

//     function __construct($name,$model,$color){
//         $this->name = $name;
//         $this->model = $model;
//         $this->color = $color;
//     }

//     function __destruct(){
//         echo "The name of car is " . $this->name;
//          echo '<hr>';
//         echo "The model of car is " . $this->model;
//          echo '<hr>';
//         echo "The color of car is " . $this->color;
//         echo '<hr>';
//     }
// }

// $dodge = new car("Dodge Challenger","2000","Black");
// $audi = new car("Audi E-tron","2022","White");
// echo "My favourite car is " . $dodge->name;
// echo "$b";
// echo "It's color is " . $dodge->color;
// echo "$b";
// echo "It's model is " . $dodge->model;
// echo "$b";
// echo "And my second favourite is " . $audi->name . "$b";

//                     access of class properties (public,private and protected)

// class living{
//     public $name;
//     protected $gender;
//     private $id;

//     protected function message(){
//         global $b;
//         echo "this line is from a protected function. $b";
//     }
// }
// class human extends living{
//     function intro(){
//         $this -> message();
//         echo "this is human class from living class.";
//     }
// }
    


// $dog = new living();
// $dog->name = "Dog"; //ok
// // $haider->gender = 'M'; //not accessed coz protected
// // $haider->id = 2345; //not accessed coz private
// $zain = new human();
// $zain->name = "zain";
// echo $zain->name;
// echo $b;
// echo $zain->intro();
// echo $b;




?>