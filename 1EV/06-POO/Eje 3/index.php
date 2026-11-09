<?php

require_once "Poligono.php";
require_once "Triangulo.php";
require_once "Cuadrado.php";

$triangulo = new Triangulo("rojo", 10, 5);
$cuadrado = new Cuadrado("azul", 4, 4);

echo "Área del triángulo: " . $triangulo->area();
echo "<br>";
echo "Área del cuadrado: " . $cuadrado->area();

echo "<br>";
echo "Color del triángulo: " . $triangulo->getColor();

?>