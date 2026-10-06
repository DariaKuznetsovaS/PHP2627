<?php
require_once 'db_functions.php';

// Comprobamos si el usuario a realizado alguna acción:
if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'insertar':
            $texto = $_GET["texto"];
            insert($texto);
            break;
        case 'eliminar':
            $id = $_GET["id"];
            deleteById($id);
            break;
        case 'vaciar':
            deleteAll();
            break;
    }
}

$items = getAll();

require "index.view.php";

