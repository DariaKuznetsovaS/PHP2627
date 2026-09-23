<?php
session_start();

$asistentes=$_SESSION;

if(isset($_GET["nombre"])){

    $_SESSION["nombre"]=$_GET["nombre"];

    array_push($asistentes, $_SESSION["nombre"]);
} 

if(isset($_GET["borrar"])){
   forEach($asistentes as $a){
    array_unset($asistentes[$a]);
   }
}

require "index.view.php";
?>