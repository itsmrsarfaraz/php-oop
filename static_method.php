<?php

// static methods can be created with static keyword. Static methods can be called directly without creating an instance of the class.

/*
class ClassName{
    public static function methodName(){
        // code
    }
}

ClassName::methodName();
*/

class greeting{
    public static function welcome() {
        echo "Hello World! <br>";
    }
    // Or
    public function __construct(){
        self::welcome();
    }
}

greeting::welcome();

class calc{
    public static function add(int $a, int $b) {
        return ($a + $b) . "<br>";
    }
}

echo calc::add(5, 10);

// they can also be called from another class 
class calc2{
    public function __construct(){
        echo calc::add(10, 20);
    }
}

$obj = new calc2();

// calling it from child class use parent keyword

class domain{
    protected static function getWebsite() {
        return "www.example.com <br>";
    }
}

class myDomain extends domain{
    public string $website;

    public function __construct(){
        $this->website = parent::getWebsite();
        echo $this->website;
    }
}

$obj = new myDomain();