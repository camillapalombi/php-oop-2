<?php
// UTENTE
class User {
    public $name;
    public $surname;
    public $email;
    public $registered = false;
    public $cardExpiration;
    public $discount = 0;
    public $validationCard = false;

    // COSTRUTTORE
    public function __construct($_name, $_surname, $_email) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }


    //GETTER : DATA DI SCADENZA DELLA CARTA
    public function getCardExpire($_cardExpiration) {
        $this->cardExpiration = $_cardExpiration;
    }


    // METODO : REGISTRATO O NO?
    public function setRegistration($_boolean) {
        if ($_boolean == true) {
            return $this->registered = true;
        } else {
            echo ('<p> Mi dispiace, non sei ancora registrato! </p>');
        }
    }


    //METODO : DIRITTO DI SCONTO O NO?
    public function setDiscount() {
        if ($this->registration == true) {
            $this->discount = 20;
            echo ("<p>Sei registrato!! Hai uno sconto del 20% su tutti i prodotti!</p>");
        } else {
            echo ("<p>Mi dispiace, non sei ancora registrato. Registrati per ottenere un 20% di sconto su tutti i prodotti!</p>");
        }
    }


    //METODO : CARTA VALIDA O NO?
    public function setValidationCard($_year) {
        if ($_year >= 2022) {
            echo("<p>La tua carta di credito è valida.</p>");
            return $this->validationCard = true;
        } else {
            echo("<p> Siamo spiacenti, la sua carta di credito non è valida perchè scaduta. </p>");
        }
    }
}

?>