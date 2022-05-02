<?php
include_once __DIR__ . '/Product.php';

//CLASSE figlia di PRODUCT
class Accessories extends Product {
    public $type;
    public $feature;
    
    // COSTRUTTORE
    public function __construct($_name, $_price, $_typeAnimal, $_brand, $_type, $_feature) {
        
        parent::__construct($_name, $_price, $_typeAnimal, $_brand);

        $this->type = $_type;
        $this->feature = $_feature;

    }
}














?>