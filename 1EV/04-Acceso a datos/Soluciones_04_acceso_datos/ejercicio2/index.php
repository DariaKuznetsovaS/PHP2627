<?php
require_once 'db_functions.php';

// Comprobamos si el usuario a realizado alguna acción:
if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'detalle':
            $id = $_GET["id"];
            $empleado = getById($id);

            require "views/detalle.view.php";
            break;
        case 'insertar':
            $empleado = array(
                "nombre" => $_GET["nombre"],
                "apellidos" => $_GET["apellidos"],
                "email" => $_GET["email"],
                "dni" => $_GET["dni"],
                "edad" => intval($_GET["edad"]),
                "fecha_nacimiento" => $_GET["fecha-nacimiento"],
                "curriculum" => $_GET["curriculum"],
                "sexo" => $_GET["sexo"]
            );
            insert($empleado);
            cargarIndex();
            break;
        case 'eliminar':
            $id = $_GET["id"];
            deleteById($id);
            cargarIndex();
            break;
        case 'vaciar':
            deleteAll();
            cargarIndex();
    }
} else {
    cargarIndex();
}

function cargarIndex() {
    $empleados = getAll();
    $nombrePagina = "Pagina principal";
    require "views/index.view.php";
}
