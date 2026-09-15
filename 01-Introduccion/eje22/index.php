<?php

$paises=[
    "Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"
];
$pais=$_GET["pais"];

function encontrarPosicion($paises,$pais){
for($x=0;$x<count($paises); $x++){
    if(array_key_exists($pais, $paises)){
        $mensaje= "Pais encontrado en la posición: $x";
    }
    else $mensaje="-1";
}
}
?>