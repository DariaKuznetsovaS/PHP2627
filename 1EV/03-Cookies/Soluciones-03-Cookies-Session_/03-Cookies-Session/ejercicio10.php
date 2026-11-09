<?php

// Si no hay ninguna cesta en sesión la crea
function inicializarCesta(): void
{
    if(!isset($_SESSION["productosCesta"])){
        $_SESSION["productosCesta"] = array();
    }
}

/**
 * Calcula el precio de los productos comprados.
 */
function calcularPrecioTotal(array $productosComprados, array $catalogoProductos): float
{
    $precioTotal = 0;
    foreach ($productosComprados as $idProducto) {
        $precioTotal += $catalogoProductos[$idProducto]['precio'];
    }
    return $precioTotal;
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

function guardarFavorito(string $id): void
{
    // Cojo el valor de las cookies y lo convierto en array
    if(isset($_COOKIE["favoritos"])){
        $favoritos = explode(",",$_COOKIE["favoritos"]); //convertir el string en array
    } else {
        $favoritos = [];
    }
    // Añado el nuevo producto favorito al array
    array_push($favoritos, $id);
    // Vuelvo a almacenar los favoritos en las cookies, convirtiéndolo a string
    setcookie("favoritos", implode(",",$favoritos), time() + 7*24*60*60); // guardarlo como string
    $_COOKIE["favoritos"] = implode(",",$favoritos); // Actualizar para que esté disponible inmediatamente
}

function esFavorito(string $id): bool
{
    if(isset($_COOKIE["favoritos"])){
        // Creo un array de favoritos a partir del string almacenado en la cookie
        $array_favoritos = explode(",",$_COOKIE["favoritos"]);
        return in_array($id, $array_favoritos);
    }
    return false;
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
        case "favorito":
            guardarFavorito($id = $_GET["idProducto"]);
            break;
        case "detalle":
            $id = $_GET["idProducto"];
            // Cargar los datos
            require_once 'ejercicio10-datos.php';
            // Dejar disponible los datos a la vista:
            $nombre = $productos[$id]["nombre"];
            $descripcion = $productos[$id]["descripción"];
            $precio = $productos[$id]["precio"];

            require "ejercicio10detalle.view.php";
            die();
    }
}

/*** INICIO DE LA APLICACION ***/

// 1. Cargar/Iniciar la sesión
session_start();

// 2. Crear la cesta vacía si no está ya creada
inicializarCesta();

// 3. Realizar la accion indicada por el usuario (insertar producto o comprar los productos de la cesta
if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}

// 4. Preparar los datos para la vista
require_once 'ejercicio10-datos.php';

if(isset($_SESSION["productosCesta"])) {
    // Preparamos los datos que necesitaremos desde la vista
    $productosComprados = $_SESSION["productosCesta"];
    $precioTotal = calcularPrecioTotal($productosComprados, $productos);
}

// Obtener el mensaje de bienvenida según el idioma
$mensajeBienvenida = obtenerMensajeBienvenida();
// Obtener el idioma seleccionado (si lo hay) para marcarlo en el <select>
$idiomaSeleccionado = isset($_COOKIE["idioma"]) ? $_COOKIE["idioma"] : "";


// 5. Cargar la vista
require "ejercicio10.view.php";
