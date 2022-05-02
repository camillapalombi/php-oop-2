<?php
class Product {
    public $name;
    public $price;
    public $typeAnimal;
    public $brand;

    public function __construct($_name, $_price, $_typeAnimal, $brand) {
        $this->name = $_name;
        $this->price = $_price;
        $this->typeAnimal = $_typeAnimal;
        $this->brand = $_brand;
    }
}

?>