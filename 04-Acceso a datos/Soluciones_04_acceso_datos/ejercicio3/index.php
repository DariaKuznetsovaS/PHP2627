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
            die();
        case 'filtrar':
            $nombre = $_GET["nombre"];
            if($nombre != "") {
                $empleados = getByName($nombre);
            } else {
                $empleados = getAll();
            }
            
            //die(json_encode($empleado));
            require "views/index.view.php";
            die();
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
            //die(json_encode($empleado));
            insert($empleado);
            break;
        case 'eliminar':
            $id = $_GET["id"];
            deleteById($id);
            break;
        case 'vaciar':
            deleteAll();
    }
}

$empleados = getAll();

require "views/index.view.php";


