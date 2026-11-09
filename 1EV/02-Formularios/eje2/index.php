<?php
$resultado=0;
if(isset($_GET["primero"])&&isset($_GET["segundo"])&&isset($_GET["operacion"])){
    $operacion=$_GET["operacion"];
    $num1=$_GET["primero"];
    $num2=$_GET["segundo"];
    $resultado=calcular($operacion, $num1, $num2);
}

function calcular($operacion, $num1, $num2){
    switch($operacion){
        case "suma": 
           return sumar($num1, $num2);
        break;
        case "resta":
            return restar($num1, $num2);
        break;
        case "multi":
            return multiplicar($num1, $num2);
        break;
        case "divi":
        if($num2==0){
        echo "Error. No se puede dividir entre 0";
        } else{
            return dividir($num1, $num2);}
            break;
        default: echo "Error de operación";
    }
}

function sumar($num1, $num2){
    return $num1+$num2;
}

function restar($num1, $num2){
    return $num1-$num2;
}

function multiplicar($num1, $num2){
    return $num1*$num2;
}

function dividir($num1, $num2){
    return $num1/$num2;
}




require "index.view.php";
?>