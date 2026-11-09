<?php


function calcularArea($lado1, $lado2){
    try{
    if(isset($_GET["lado1"] && isset($_GET["lado2"]))){
    $lado1=$_GET["lado1"];
    $lado2=$_GET["lado2"];
    }
    
        if($lado1==0 || $lado2==0){
            throw new Exception("Algun lado es un 0.");
        } else{
            return $lado*$lado;
        }

    }
    catch(Exception $e){
        echo "No se ha podido realizar la operación".$e->getMessage();
    }
}

require("index.view.php");

?>