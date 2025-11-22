<?php
trait loger{
    public function log(){
        echo "<pre>";
        echo get_class($this).'<br>';
        echo "Name: $this->name <br>";
        echo "Phone: $this->phNo<br>";
        echo "</pre>";
    }
}
class Admins{
    use loger;
    private $name;
    private $phNo;
    public function __construct($name,$phNo){
        $this->name = $name;
        $this->phNo = $phNo;
    }
}
class Users{
    use loger;
    private $name;
    private $phNo;
    public function __construct($name,$phNo){
        $this->name = $name;
        $this->phNo = $phNo;
    }
}

$admin1 = new Admins('Haider','03076720400');
$user1 = new Users('Zain','03431830998');
$admin1->log();


?>