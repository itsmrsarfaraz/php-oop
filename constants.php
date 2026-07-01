<?php

/* constants are like variables, but once they are defined they cannot be changed or undefined
    class constants are case-sensitive by default. However, it is possible to make them case-insensitive by passing true as the third 
    argument of the define() function. This is not recommended, as it can lead to confusion and bugs in your code.
    By default they are public and can be accessed from outside the class using the scope resolution operator (::) 
    without creating an instance of the class.
*/

class GoodBye{
    const MESSAGE = "Goodbye, World!";

    public function sayGoodBye(){
        echo self::MESSAGE . "<br>"; // access the constant using self:: instead of $this-> because it is a class constant
    }
}

$goodbye = new GoodBye();
$goodbye->sayGoodBye();
// access the constant using the class name and scope resolution operator (::) without creating an instance of the class
echo GoodBye::MESSAGE;