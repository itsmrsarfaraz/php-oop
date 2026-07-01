<?php

/* There are three access modifiers in PHP: public, protected, and private. 
    public - allow the property or method to be accessed from anywhere.
    protected - allow the property or method to be accessed within the class and by classes derived from that class.
    private - allow the property or method to be accessed only within the class.
    -------------------------------------------------------------------------------
    by default if no access modifier is specified, it will be considered as public.
*/

class Fruit{
    public string $name; // can be accessed from anywhere
    // private string $color; // can be accessed only within the class
    // protected int $weight; // can be accessed within the class and by classes derived from that class
    
    public function getDetails(){
        echo 'Name: ' . $this->name . '<br>';
        // echo 'Color: ' . $this->color . '<br>';
        // echo 'Weight: ' . $this->weight . '<br>';
    }
}

$apple = new Fruit();
$apple->name = "Apple";
// $apple->color = "Red"; // This will cause an error because $color is private
// $apple->weight = 150; // This will cause an error because $weight is protected
$apple->getDetails();