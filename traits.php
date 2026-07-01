<?php

// traits are a mechanism for code reuse. It is used to declare methods/abstract methods that can be used in multiple classes. 
// Traits are similar to abstract classes, but they cannot be instantiated on their own. 
// Instead, they are meant to be used in other classes through the use of the "use" keyword.

/*
trait TraitName{
    // methods
}

class ClassName{
    use TraitName;
}
*/

trait message1{
    public function msg1() {
        echo "PHP OOP is fun! <br>";
    }
    public function msg2() {
        echo "Traits reduce code duplication! <br>";
    }
    public function msg3() {
        echo "Hello World! <br>";
    }
}

class Welcome{
    use message1;
}

class Welcome2{
    use message1;
}

$obj = new Welcome();
$obj->msg1();
$obj->msg3();
$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();