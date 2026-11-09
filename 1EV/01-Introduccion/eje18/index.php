<?php
$num=$_GET["num"];
$mensaje="Un número de la semana";


switch($num){
    case "1":
        $mensaje= "Es lunes";
        break;
    case "2":
        $mensaje= "Es martes";
        break;
    case "3":
        $mensaje= "Es miércoles";
        break;
    case "4":
        $mensaje= "Es jueves";
        break;
    case "5":
        $mensaje="Es viernes";
        break;
    case "6":
        $mensaje= "Es sábado";
        break;
    case "7":
        $mensaje= "Es domingo";
        break;
    default:
    $mensaje= "Se pide un número de 1 a 7";
}
require "index.view.php";
?>