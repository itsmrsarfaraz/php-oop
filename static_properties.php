<?php

// the rules for Static Properties are same as for the Static Methods
class Pi{
    private static $value = 3.14;
    public static $salary = 1000;

    public function __construct(){
        echo self::$value;
    }
}

class x extends Pi{
    public function xStatic() {
        return parent::$salary;
    }
}
$piValue = new Pi();
echo Pi::$salary;

$xValue = new x();
echo $xValue->xStatic();