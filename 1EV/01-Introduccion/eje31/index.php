<?php

function generarArray(){
    $array=array();
    for($x=0; $x<=20; $x++){
        array_push($array, random_int(1,999));
    }
    return $array;
}

$arrayGenerado=generarArray();

function mostrarValorBajo($arrayGenerado){
    $valorBajo=999;
    forEach($arrayGenerado as $a){
        if($a<$valorBajo){
            $valorBajo=$a;
        }
        
    }
    return $valorBajo;
    
}

$valorBajo=mostrarValorBajo($arrayGenerado);

function mostrarValorAlto($arrayGenerado){
    $valorAlto=1;
    forEach($arrayGenerado as $a){
        if($a>$valorAlto){
            $valorAlto=$a;
        }
    }
    return $valorAlto;
}

$valorAlto=mostrarValorAlto($arrayGenerado);

require "index.view.php";
?>