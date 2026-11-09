<?php

$articulos=array(
    "art1"=>array(
        "nombre" =>"Logitech K120",
        "desc"=> "Teclado multimedia USB plug&play",
        "precio"=>"25.99"
    ),
    "art2"=>array(
        "nombre" => "Lenovo LI5",
        "desc"=>"El mouse Lenovo 3000 compacto inalámbrico",
        "precio"=>"12.99"
    ),
    "art3"=>array(
        "nombre"=>"Monitor LG X10",
        "desc"=>"LCD con retroiluminación LED",
        "precio"=>"179.99"
    ),
    "art4"=>array(
        "nombre"=>"Monitor Lenovo Q24i",
        "desc"=>'Pantalla de 23,8"',
        "precio"=>"172"
    )
);

if(isset($_POST["cantidad"])){
    $cantidades=$_POST["cantidad"];

    $resultado=realizarCompra($articulos, $cantidades);

    $compra=$resultado["compra"];

    $importeTotal=$resultado["importeTotal"];

    require "detalleCompra.view.php";

} else {

    require "index.view.php";
}

function realizarCompra($articulos, $cantidades){
    
    $compra=array();
    $importeTotal=0;

    foreach($cantidades as $id=>$cantidad){
        
        if($cantidad>0){
            $articulo=$articulos[$id];

            $articulo["cantidad"] = $cantidad;
            $articulo["total"]=$articulo["precio"]*$cantidad;
            $importeTotal+=$articulo["total"];
            $compra[]=$articulo;
        }
    }
    return array(
        "compra"=>$compra,
        "importeTotal"=>$importeTotal
    );
}


?>