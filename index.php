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


?>