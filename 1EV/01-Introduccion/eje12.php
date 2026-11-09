<?php
$ciudades=["Paris", "Berlin", "Amsterdam", "Praga"];
$posicion=$_GET["num"];
$ciudad=$_GET["ciudad"];
echo getValor($ciudades, $posicion);
echo setValor($ciudades, $posicion, $ciudad);

function getValor($ciudades, $posicion){
    return $ciudades[$posicion];
}

function setValor($ciudades, $posicion, $ciudad){
    $ciudades[$posicion]=$ciudad;
    return $ciudades;
}
?>