<?php
include_once __DIR__ . '/Product.php';

//CLASSE figlia di PRODUCT
class Care extends Product {
    public $typeDisease;
    public $contraindications;
    
    // COSTRUTTORE
    public function __construct($_name, $_price, $_typeAnimal, $_brand, $_typeDisease, $_contraindications) {
        
        parent::__construct($_name, $_price, $_typeAnimal, $_brand);

        $this->typeDisease = $_typeDisease;
        $this->contraindications = $_contraindications;

    }
}

?>