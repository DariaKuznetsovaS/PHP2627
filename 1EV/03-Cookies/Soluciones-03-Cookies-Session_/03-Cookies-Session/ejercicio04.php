<?php
// Iniciar o cargar sesión
session_start();

/*** FUNCIONES ***/
function cargarLista(): array
{
    if(!isset($_SESSION["listaPersonas"])){
        $_SESSION["listaPersonas"] = array();
    }
    return $_SESSION["listaPersonas"];
}

function realizarAccion(string $accion): void
{
    switch ($accion) {
        case "insertar":
            if(isset($_GET["persona"])) {
                $nombrePersona = $_GET["persona"];
                cargarLista();
                array_push($_SESSION["listaPersonas"], $nombrePersona);
            }
            break;
        case "vaciar":
            unset($_SESSION["listaPersonas"]);
            break;
    }
}

/*** INICIO DE LA APLICACION ***/

if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}
$personas = cargarLista();
require "ejercicio04.view.php";
