<?php

abstract class Fruit{
    public string $name;
    public string $color;

    public function __construct(string $name, string $color){
        $this->name = $name;
        $this->color = $color;
    }

    abstract public function intro(); // abstract method
}

class Strawberry extends Fruit{
    public function intro(){
        echo "This fruit is {$this->name} and the color is {$this->color} <br>";
    }
}

class Apple extends Fruit{
    public function intro(){
        echo "This fruit is {$this->name} and the color is {$this->color} <br>";
    }
}

$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->intro();

$apple = new Apple("Apple", "Green");
$apple->intro();


abstract class Car{
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    abstract public function intro(); // abstract method
}

class Audi extends Car{
    public function intro(){
        echo "This car is {$this->name} <br>";
    }
}

class Citeorn extends Car{
    public function intro(){
        echo "This car is {$this->name} <br>";
    }
}
// Abstract class cannot be instantiated, but it can be inherited. 
// The child class must implement all abstract methods from the parent class.
// $car = new Car("Car"); // This will cause an error because abstract classes cannot be instantiated.
$audi = new Audi("Audi");
$audi->intro();
$citeorn = new Citeorn("Citeorn");
$citeorn->intro();

// Abstract Method with Argument
abstract class ParentClass{
    abstract protected function prefixName(string $name);
}
class ChildClass extends ParentClass{
    public function prefixName(string $name, string $separator = ".", string $greet = "Dear"){
        if($name == "John Doe"){
            $prefix = "Mr";
        } elseif ($name == "Jane Doe"){
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name} <br>";
    }
}

$class = new ChildClass();
echo $class->prefixName("John Doe"); // Mr. John Doe
echo $class->prefixName("Jane Doe"); // Mrs. Jane Doe
echo $class->prefixName("Baby Doe");