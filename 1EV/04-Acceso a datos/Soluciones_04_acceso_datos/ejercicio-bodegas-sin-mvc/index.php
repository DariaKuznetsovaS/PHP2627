<?php
require_once 'db_functions.php';

// Tipos de vino disponibles (se usan en los formularios de vino).
// Es una constante para que sea accesible también desde dentro de las funciones
// (las variables globales no son visibles dentro de realizarAccion()).
const TIPOS_VINO = array("Tinto", "Blanco", "Rosado", "Espumoso");

// Recoge los datos del formulario de bodega (enviado por POST)
function bodegaFromPost(): array
{
    return array(
        "nombre" => $_POST["nombre"],
        "direccion" => $_POST["direccion"],
        "email" => $_POST["email"],
        "telefono" => $_POST["telefono"],
        "contacto" => $_POST["contacto"],
        "fundacion" => $_POST["fundacion"] !== "" ? intval($_POST["fundacion"]) : null,
        "descripcion" => $_POST["descripcion"],
        "restaurante" => $_POST["restaurante"],
        "hotel" => intval($_POST["hotel"])
    );
}

// Recoge los datos del formulario de vino (enviado por POST)
function vinoFromPost(): array
{
    return array(
        "nombre" => $_POST["nombre"],
        "descripcion" => $_POST["descripcion"],
        "anio" => $_POST["anio"] !== "" ? intval($_POST["anio"]) : null,
        "alcohol" => $_POST["alcohol"] !== "" ? floatval($_POST["alcohol"]) : null,
        "tipo" => $_POST["tipo"]
    );
}

// Redirige y termina la ejecución (patrón Post/Redirect/Get)
function redirect($url): void
{
    header("Location: $url");
    die();
}

function realizarAccion($accion): void
{
        switch ($accion) {
            /* ---------------------------- BODEGAS ---------------------------- */
            case 'bodega_nueva':
                require "views/bodega_nueva.view.php";
                die();
            case 'bodega_insertar':
                $id = insertBodega(bodegaFromPost());
                redirect("index.php?accion=bodega_detalle&id=$id");
            case 'bodega_detalle':
                $bodega = getBodegaById($_GET["id"]);
                if(!$bodega) {
                    redirect("index.php");
                }
                $vinos = getVinosByBodega($bodega->id);
                // Los campos sólo se pueden modificar si se ha pulsado "Editar"
                $soloLectura = !isset($_GET["editar"]);

                require "views/bodega_detalle.view.php";
                die();
            case 'bodega_actualizar':
                $bodega = bodegaFromPost();
                $bodega["id"] = intval($_POST["id"]);
                updateBodega($bodega);
                redirect("index.php?accion=bodega_detalle&id=" . $bodega["id"]);
            case 'bodega_eliminar':
                deleteBodegaById($_GET["id"]);
                redirect("index.php");

            /* ----------------------------- VINOS ----------------------------- */
            case 'vino_nuevo':
                $bodega = getBodegaById($_GET["bodega_id"]);
                if(!$bodega) {
                    redirect("index.php");
                }

                require "views/vino_nuevo.view.php";
                die();
            case 'vino_insertar':
                $vino = vinoFromPost();
                $vino["bodega_id"] = intval($_POST["bodega_id"]);
                insertVino($vino);
                redirect("index.php?accion=bodega_detalle&id=" . $vino["bodega_id"]);
            case 'vino_detalle':
                $vino = getVinoById($_GET["id"]);
                if(!$vino) {
                    redirect("index.php");
                }
                $soloLectura = !isset($_GET["editar"]);

                require "views/vino_detalle.view.php";
                die();
            case 'vino_actualizar':
                $vino = vinoFromPost();
                $vino["id"] = intval($_POST["id"]);
                updateVino($vino);
                redirect("index.php?accion=vino_detalle&id=" . $vino["id"]);
            case 'vino_eliminar':
                $vino = getVinoById($_GET["id"]);
                if(!$vino) {
                    redirect("index.php");
                }
                deleteVinoById($vino->id);
                redirect("index.php?accion=bodega_detalle&id=" . $vino->bodega_id);
        }

}


// Comprobamos si el usuario ha realizado alguna acción:
if(isset($_GET["accion"])) {
    // Realizamos la acción correspondiente (insertar, eliminar, actualizar, etc.)
    realizarAccion($_GET["accion"]);
}

$bodegas = getAllBodegas();

require "views/index.view.php";
