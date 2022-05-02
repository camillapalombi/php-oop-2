<?php
// INCLUDE FILE PHP
include_once __DIR__ . '/User.php';
include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Food.php';
include_once __DIR__ . '/Accessories.php';
include_once __DIR__ . '/Care.php';

//USER
$CamiPalo97 = new User('Camilla', 'Palombi', 'camilla_palombi@yahoo.com');

//FOOD
$MongeNatural = new Food('Monge Natural', 27,'Dog', 'Monge', 'Calf', 8);

//ACCESSORIES
$JK9Speed = new Accessories('Julius', 35, 'Cat', 'Julius-k9', 'Harness', 'Walk the cat');

//CARE 
$Seresto = new Care('Seresto', 15, 'Dog', 'Bayer', 'Fleas', 'Vomit');

// RICHIAMO I METODI:
$CamiPalo97->setRegistration(true);
if ($CamiPalo97->registered == true) { //se l'utente è registrato applica lo sconto

    $CamiPalo97->setDiscount();
    $CamiPalo97->getCardExpiretion(2026);
    $CamiPalo97->setValidationCard($CamiPalo97->cardExpiration);


    $productDiscount = $MongeNatural->price * $CamiPalo97->discount / 100;
    $productPrice = $MongeNatural->price - $productDiscount;
    echo("<p> Il prodotto ora costa " . $productPrice . " euro </p>"); //stampa del prezzo già scontato

    $productDiscountTwo = $JK9Speed->price * $CamiPalo97->discount / 100;
    $productPriceTwo = $JK9Speed->price - $productDiscountTwo;
    echo("<p> Il prodotto ora costa " . $productPriceTwo . " euro!</p>"); //stampa del prezzo già scontato

} else { //altrimenti
    echo("<p>Registrati al nostro sito per avere lo sconto altrimenti continua gli acquisti a prezzo pieno.</p>");

};


//BONUS: Disponibilità in base al mese
$currentDate = date ("d/m/Y");
$currentMonth = date("d",strtotime($currentDate));

if ($Seresto->setAvailability($currentMonth) == true) {
    echo("<p> Il prodotto è disponibile! </p>");
}


?>