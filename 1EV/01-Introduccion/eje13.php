<?php
$animales=["gato","perro","conejo","serpiente"];
$colores=["negro","blanco", "marron", "verde"];


function calcularNumeroElementos($arr){
    return count($arr);
}
echo "Hay ".calcularNumeroElementos($animales). " animales<br>";
echo " Y ".calcularNumeroElementos($colores). " colores<br>";


function agregarAlFinal(&$array){
   return array_push($array,"oso");
}

agregarAlFinal($animales);
print_r($animales);


function agregarAlPrincipio(&$array){
    return array_unshift($array, "amarillo");
}
agregarAlPrincipio($colores);
print_r($colores);

function unirArrays($array1, $array2){
   return $arrayUnido=array_merge($array1, $array2);
}
$arrayUnido=unirArrays($animales, $colores);
var_export($arrayUnido);
?>