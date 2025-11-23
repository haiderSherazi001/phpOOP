<?php

class Calculate{
    public static $name = "sherix";

    public static function add($n1,$n2){
        return $n1+$n2;
    }
}
echo Calculate::add(34,3);
echo '<hr>';
echo Calculate::$name;
?>