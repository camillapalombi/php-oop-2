<?php
include_once __DIR__ . '/Product.php';

//CLASSE figlia di PRODUCT
class Care extends Product {
    public $typeDisease;
    public $contraindications;
    public $availability = false;
    
    // COSTRUTTORE
    public function __construct($_name, $_price, $_typeAnimal, $_brand, $_typeDisease, $_contraindications) {
        
        parent::__construct($_name, $_price, $_typeAnimal, $_brand);

        $this->typeDisease = $_typeDisease;
        $this->contraindications = $_contraindications;

    }

    //BONUS: Disponibilità in base al mese
    public function getAvailability($_availability) {
        $this->availability = $_availability;
    }

    public function setAvailability($_month) {
        if ($_month == 05 ||$_month == 06 ||$_month == 07) {
            return $this->availability = true;
        } else {
            echo("<p> Siamo spiacenti, questo prodotto non è al momento disponibile. </p>");
        }
    }
}

?>