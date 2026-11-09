<?php

$num1=$_GET["num1"];
$num2=$_GET["num2"];

function dividir($num1, $num2){
    try{
        
        if($num2==0){
            throw new Exception("No puedes dividir entre 0");
        }
        return $num1/$num2;
    } catch(Exception $e){
            echo "No se ha podido realizar la operacion ".$e->getMessage();
    }
}



?>