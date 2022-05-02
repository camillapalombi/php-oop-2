<?php

include_once __DIR__ . '/Product.php';

// CLASSE figlia di PRODUCT
class Food extends Product {
    public $flavor;
    public $quantity;

    // COSTRUTTORE
    public function __construct($_name, $_price, $_typeAnimal, $_brand, $_flavor, $_quantity) {
        
        parent::__construct($_name, $_price, $_typeAnimal, $_brand);

        $this->flavor = $_flavor;
        $this->quantity = $_quantity;

    }
}



?>