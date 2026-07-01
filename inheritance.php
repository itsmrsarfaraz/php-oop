<?php

class Fruit{
    public string $name;
    public string $color;

    public function __construct(string $name, string $color){
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro(){
        echo "This fruit is {$this->name} and the color is {$this->color} <br>";
    }
}

class Strawberry extends Fruit{
    public function message(){
        echo "Am I a fruit or a berry? <br>";
        $this->intro(); // called it here because it is protected and can be accessed within the derived class
    }
}

$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->message();
// $strawberry->intro(); // call it within derived class, but cannot be called outside the class because it is protected