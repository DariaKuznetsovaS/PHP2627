<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/src/Zapatilla.php";

use eftec\bladeone\BladeOne;
use Ejercicio2\Zapatilla;

$blade = new BladeOne();

$zapatillas=[];

$zapatillas[] = new Zapatilla("Adidas", "MARQUEE BOOST", "Baloncesto", "140€");
$zapatillas[] = new Zapatilla("Nike", "Air Max", "Running", "120€");
$zapatillas[] = new Zapatilla("Puma", "RS-X", "Casual", "95€");
$zapatillas[] = new Zapatilla("New Balance", "574", "Casual", "110€");
$zapatillas[] = new Zapatilla("Asics", "Gel-Kayano", "Running", "160€");
$zapatillas[] = new Zapatilla("Reebok", "Nano X", "Entrenamiento", "130€");
$zapatillas[] = new Zapatilla("Converse", "Chuck Taylor", "Casual", "75€");
$zapatillas[] = new Zapatilla("Adidas", "Predator", "Fútbol", "100€");
$zapatillas[] = new Zapatilla("Nike", "Dunk Low", "Casual", "115€");
$zapatillas[] = new Zapatilla("Puma", "MB.03", "Baloncesto", "125€");

echo $blade->run("tabla",[
    "zapatillas" => $zapatillas
]);