<?php

require("bd.php");


if(isset($_GET["accion"])){

    $accion = $_GET["accion"];

    switch($accion){

        case "añadirBodega":
            redirect("views/nuevaBodega.php");
            break;

        case "volver":
            redirect("index.php");
            break;

        case "insertNuevaBodega":

            $datos = [
                "nombre" => $_GET["nombre"],
                "direccion" => $_GET["direccion"],
                "telefono" => $_GET["telefono"],
                "email" => $_GET["email"],
                "fecha" => $_GET["fecha"],
                "contacto" => $_GET["contacto"],
                "restaurante" => $_GET["restaurante"],
                "hotel" => $_GET["hotel"]
            ];

            insertBodega($db, $datos);

            redirect("index.php?mensaje=insertado");

            break;
        
        case "borrar":
            $id=$_GET["id"];
            borrarBodega($db, $id);
            break;
        
        case "verDetalles":
            $id=$_GET["id"];
           $bodega= getBodega($db, $id);
            require("views/detallesBodega.php");
            die();
            break;
    }
}


$listaBodegas = getBodegas($db);

cargarVista($listaBodegas);

function getBodega($db, $id){
    $stmt=$db->prepare("
    SELECT * FROM bodegas WHERE id=:id"
    );
    $stmt->execute(["id"=>$id]);

    $bodega=$stmt->fetch(PDO::FETCH_ASSOC);
    return $bodega;

}

function borrarBodega($db, $id){
    $stmt=$db->prepare("
    DELETE FROM bodegas WHERE id=:id
    ");
    $stmt->execute(["id"=>$id]);

}

function insertBodega($db, $datos){

    $stmt = $db->prepare("
        INSERT INTO bodegas
        (nombre, direccion, telefono, email, contacto, fecha_fund, restaurante, hotel)
        VALUES
        (:nombre, :direccion, :telefono, :email, :contacto, :fecha, :restaurante, :hotel)
    ");

    $stmt->execute($datos);
}


function getBodegas($db){

    $stmt = $db->prepare("
        SELECT * FROM bodegas
    ");

    $stmt->execute();

    $listaBodegas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $listaBodegas;
}


function redirect($url){

    header("Location: $url");
    die();
}


function cargarVista($listaBodegas){

    require("views/index.view.php");
}

?>