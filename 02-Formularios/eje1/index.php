<?php
if(isset($_GET["temperatura"])||isset($_GET["unidad"])){
$temperatura=$_GET["temperatura"];
$unidad=$_GET["unidad"];
}

$resultado=calcularTemperatura($temperatura, $unidad);

function calcularTemperatura($temperatura, $unidad){
    if($unidad=="ce"){
       return $resultado=1.8*$temperatura+27;
    } elseif($unidad=="fa"){
       return $resultado=$temperatura-27;
    }
    return -1;
}


require "index.view.php";
?>