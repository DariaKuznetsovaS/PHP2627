<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/src/Zapatilla.php";

use eftec\bladeone\BladeOne;
use Ejercicio2\Zapatilla;

$blade = new BladeOne();

$zapatilla = new Zapatilla(
    "Adidas",
    "MARQUEE BOOST",
    "Zapatilla de baloncesto",
    "140€"
);

echo $blade->run("tabla",[
    "zapatilla" => $zapatilla
]);