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
$listaCompra=obtenerLista($db);

if(isset($_GET["accion"])){
    $accion = $_GET["accion"];

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        realizarAccion($accion, $id, $db);
    }
}



function connect($host, $dbname, $user, $pass){
 try {
 # MySQL
 $dbh= new PDO(
 "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
 $user, $pass
 );
 $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 return $dbh;
 }
 catch(PDOException $e) {
 echo $e->getMessage();
 }
}

function obtenerLista($db){

    $stmt=$db->prepare(
        "SELECT * FROM productos"
    );
    $stmt->execute();
    $listaCompra=$stmt->fetchAll(PDO::FETCH_ASSOC);

    return $listaCompra;
}

function añadirElemento($elemento, $db){
    $stmt=$db->prepare("
    INSERT INTO productos(nombre)VALUES(?)");
    $stmt->execute([$elemento]);
}

function realizarAccion($accion, $id, $db){

    if($accion == "eliminar"){
        borrarElemento($id, $db);
    }
    if($accion=="vaciar"){
        vaciarLista($listaCompra, $db);
    }
}

function borrarElemento($id, $db){

    $stmt = $db->prepare("
        DELETE FROM productos
        WHERE id = ?
    ");

    $stmt->execute([$id]);
}



require "index.view.php";
?>