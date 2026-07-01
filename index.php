<?php 

class Fruit{
    public string $name;
    public string $color;

    public function setDetails(string $name, string $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function getDetails(){
        echo "Fruit name is: " . $this->name . " and color is: " . $this->color. "<br>";
    }
}

$apple = new Fruit();
$apple->setDetails("Apple", "Red");
$apple->getDetails();
var_dump($apple instanceof Fruit);

echo '<br>';

$banana = new Fruit();
$banana->setDetails("Banana", "Yellow");
$banana->getDetails();
var_dump($banana instanceof Fruit);