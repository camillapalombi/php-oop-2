<?php
//CLASSE 'GENITORE'
class Product {
    public $name;
    public $price;
    public $typeAnimal;
    public $brand;

    //COSTRUTTORE
    public function __construct($_name, $_price, $_typeAnimal, $_brand) {
        $this->name = $_name;
        $this->price = $_price;
        $this->typeAnimal = $_typeAnimal;
        $this->brand = $_brand;
    }
}

?>