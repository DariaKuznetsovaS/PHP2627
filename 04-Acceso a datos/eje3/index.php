<?php

$host="localhost";
$dbname="dasha-eje3";
$user="root";
$pass="";

$db=connect($host, $dbname, $user, $pass);

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

if(isset($_GET["accion"])){
    $accion=$_GET["accion"];

    switch($accion){
        case "verDetalles":
            $dni=$_GET["dni"];
            verDetalles($dni, $db);
            require "verDetalles.view.php?";
            die();

            break;
    }
}

//cargar lista y vista


function obtenerLista($db){
    $stmt=$db->prepare("SELECT * FROM empleados");
    $stmt->execute();
    $listaEmpleados=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $listaEmpleados;
}


function verDetalles($dni, $db){
    $stmt=$db->prepare("
    SELECT * FROM empleados WHERE dni=:dni");
    $stmt->execute($dni);
    
    
}






$listaEmpleados=obtenerLista($db);
require "index.view.php";
?>