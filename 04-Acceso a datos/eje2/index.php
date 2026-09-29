<?php

$host="localhost";
$dbname="dasha-eje2";
$user="root";
$pass="";

$db=connect($host, $dbname, $user, $pass);


if(isset($_POST["producto"]) && !empty($_POST["producto"])){
    $elemento = $_POST["producto"];
    añadirElemento($elemento, $db);
}


if(isset($_GET["accion"])){
    $accion = $_GET["accion"];

    if($accion == "vaciar"){
        vaciarLista($db);
    }

    if($accion == "eliminar" && isset($_GET["id"])){
        $id = $_GET["id"];
        borrarElemento($id, $db);
    }
}

$listaCompra=obtenerLista($db);


function connect($host, $dbname, $user, $pass){
    try {
        $dbh = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user,
            $pass
        );

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbh;

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}


function obtenerLista($db){

    $stmt = $db->prepare("
        SELECT * FROM productos
    ");

    $stmt->execute();

    $listaCompra = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $listaCompra;
}


function añadirElemento($elemento, $db){

    $stmt = $db->prepare("
        INSERT INTO productos(nombre)
        VALUES(?)
    ");

    $stmt->execute([$elemento]);
}


function borrarElemento($id, $db){

    $stmt = $db->prepare("
        DELETE FROM productos
        WHERE id = ?
    ");

    $stmt->execute([$id]);
}


function vaciarLista($db){

    $stmt = $db->prepare("
        DELETE FROM productos
    ");

    $stmt->execute();
}


require "index.view.php";
?>