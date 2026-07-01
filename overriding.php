<?php

class Fruit{
    public string $name;
    public string $color;

    public function __construct(string $name, string $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo 'Name: ' . $this->name . ' Color: ' . $this->color . ' ';
    }
}

class Strawberry extends Fruit{
    public int $weight;

    public function __construct(string $name, string $color, int $weight){
        parent::__construct($name, $color);
        $this->weight = $weight;
    }

    public function intro(){
        parent::intro(); // accessing the parent class method with scope resolution operator
        echo 'Weight: ' . $this->weight . '<br>';
    }
}

$strawberry = new Strawberry("Strawberry", "Red", 50);
$strawberry->intro();

/* a class with final keyword can't be inherited and method with final can't be override
    final class Fruit{}
    class Strawberry extends Fruit{} will result in an error 

    ---
    class Fruit{
        final public function intro(){} // this method can't be override in derived class
    }
    class Strawberry extends Fruit{
        public function intro(){} // will result in an error
    }
*/