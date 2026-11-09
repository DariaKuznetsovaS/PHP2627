<?php

//Los productos(cargados en la tabla con un foreach:
$productos = [
    1 => [
        "nombre" => "The Legend of Zelda: Tears of the Kingdom",
        "desc" => "Aventura y exploración en el reino de Hyrule",
        "precio" => 59.99
    ],
    2 => [
        "nombre" => "Resident Evil Requiem",
        "desc" => "Novena entrega principal de la saga de terror y supervivencia desarrollada y publicada por Capcom",
        "precio" => 29.99
    ],
    3 => [
        "nombre" => "Elden Ring",
        "desc" => "RPG de acción ambientado en un mundo de fantasía",
        "precio" => 49.99
    ],
    4 => [
        "nombre" => "Cyberpunk 2077",
        "desc" => "RPG de acción ambientado en Night City",
        "precio" => 39.99
    ],
    5 => [
        "nombre" => "Baldur's Gate 3",
        "desc" => "RPG basado en el universo de Dungeons & Dragons",
        "precio" => 54.99
    ],
    6 => [
        "nombre" => "Hades",
        "desc" => "Roguelike de acción ambientado en la mitología griega",
        "precio" => 24.99
    ]
];
//Carga de sesión:
session_start();
//inicio de cesta:
if(isset($_SESSION["productosCesta"])){
    $_SESSION["productosCesta"]=[];
}

if(isset($_GET["accion"])){
    $accion=$_GET["accion"];
    realizarAccion($accion);
}

function realizarAccion($accion){
switch($accion){
    case "annadir":
        if(isset($_GET["idProducto"])){
            $idProductoComprado=$_GET["idProducto"];
            array_push($_SESSION["productosCesta"],$idProductoComprado);
        }
        break;
}
}


require "index.view.php";
?>