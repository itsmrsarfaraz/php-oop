<?php

// An interface allows you to create code which specifies which methods a class must implement. 
// Interfaces make it easy to use different classes in the same way.

/*
interface InterfaceName{
    public function method1();
    public function method2(string $name);
}

class ClassName implements InterfaceName{
    public function method1(){
        echo "This is method 1 <br>";
    }

    public function method2(string $name){
        echo "This is method 2 and the name is {$name} <br>";
    }
}
*/

interface Animal{
    public function fromFamily();
    public function makeSound();
}

class Dog implements Animal{
    public function fromFamily(){
        echo 'Dog is from the Canidae family <br>';
    }
    public function makeSound(){
        echo 'Woof! <br>';
    }
}

class Cat implements Animal{
    public function fromFamily(){
        echo 'Cat is from the Felidae family <br>';
    }
    public function makeSound(){
        echo 'Meow! <br>';
    }
}

$dog = new Dog();
$dog->fromFamily();
$dog->makeSound();

$cat = new Cat();
$cat->fromFamily();
$cat->makeSound();

