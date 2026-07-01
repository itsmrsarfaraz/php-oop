<?php

class Fruit{
    public string $name;
    public string $color;

    public function __construct(string $name, string $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function __destruct(){
        echo 'Name: ' . $this->name . ' Color: ' . $this->color . '<br>';
    }
}

$apple = new Fruit("Apple", "Red");
