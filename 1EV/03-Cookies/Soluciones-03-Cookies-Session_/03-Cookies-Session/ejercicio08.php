<?php

// Si no hay ninguna cesta en sesión la crea
function inicializarCesta(): void
{
    if(!isset($_SESSION["productosCesta"])){
        $_SESSION["productosCesta"] = array();
    }
}

function calcularPrecioTotal(array $productosComprados, array $catalogoProductos): float
{
    $precioTotal = 0;
    foreach ($productosComprados as $idProducto) {
        $precioTotal += $catalogoProductos[$idProducto]['precio'];
    }
    return $precioTotal;
}

function realizarAccion(string $accion): void
{
    switch ($accion) {
        case "insertar":
            if(isset($_GET["idProducto"])) {
                $idProductoComprado = $_GET["idProducto"];
                array_push($_SESSION["productosCesta"], $idProductoComprado);
            }
            break;
        case "comprar":
            unset($_SESSION["productosCesta"]);
            break;
        case "cambiarIdioma":
            if(isset($_GET["idioma"])) {
                $idioma = $_GET["idioma"];
                // Guardar el idioma en una cookie que expire en 30 días
                setcookie("idioma", $idioma, time() + (30 * 24 * 60 * 60));
                $_COOKIE["idioma"] = $idioma; // Actualizar para que esté disponible inmediatamente
            }
            break;
    }
}

function obtenerMensajeBienvenida(): string
{
    if(isset($_COOKIE["idioma"])) {
        switch($_COOKIE["idioma"]) {
            case "es":
                return "Bienvenido";
            case "eu":
                return "Ongi etorri";
        }
    }
    return ""; // Si no hay idioma seleccionado, no muestra nada
}

/*** INICIO DE LA APLICACION ***/

// 1. Cargar datos de productos
require_once 'ejercicio07-datos.php';

// 2. Cargar/Iniciar la sesión
session_start();

// 3. Crear la cesta vacía si no está ya creada
inicializarCesta();

// 4. Realizar la accion indicada por el usuario (insertar producto o comprar los productos de la cesta
if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}

// 5. Preparar los datos para la vista
if(isset($_SESSION["productosCesta"])) {
    // Preparamos los datos que necesitaremos desde la vista
    $productosComprados = $_SESSION["productosCesta"];
    $precioTotal = calcularPrecioTotal($productosComprados, $productos);
}

// Obtener el mensaje de bienvenida según el idioma
$mensajeBienvenida = obtenerMensajeBienvenida();
// Obtener el idioma seleccionado (si lo hay) para marcarlo en el <select>
$idiomaSeleccionado = isset($_COOKIE["idioma"]) ? $_COOKIE["idioma"] : "";

// 6. Cargar la vista
require "ejercicio08.view.php";
