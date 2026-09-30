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
            $empleado=verDetalles($dni, $db);
            require "Views/verDetalles.view.php";
            die();
            break;
        case "insertar":
            if(isset($_GET["nombre"])&&isset($_GET["apellidos"])&&isset($_GET["edad"])&&
                isset($_GET["fechaNac"])&&isset($_GET["dni"])&&
                isset($_GET["sexo"])&&isset($_GET["curriculum"])){
                    $empleado=[
                        "nombre"=>$_GET["nombre"],
                        "apellidos"=>$_GET["apellidos"],
                        "edad"=>$_GET["edad"],
                        "fecha_nac"=>$_GET["fechaNac"],
                        "dni"=>$_GET["dni"],
                        "sexo"=>$_GET["sexo"],
                        "curriculum"=>$_GET["curriculum"]
                    ];
                }
                else{
                    echo "Todo los campos son obligatorios";
                }
            insertEmpleado($db, $empleado);
            break;
        case "eliminar":
            $dni=$_GET["dni"];
            borrarEmpleado($dni, $db);
            break;
        case "vaciar":
            borrarTodo($db);
            break;
    }
}

//cargar lista y vista
cargarVista($db);

function obtenerLista($db){
    $stmt=$db->prepare("SELECT * FROM empleados");
    $stmt->execute();
    $listaEmpleados=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $listaEmpleados;
}

function insertEmpleado($db, $empleado){
    $stmt=$db->prepare("
    INSERT INTO empleados VALUES(:dni, :nombre, :apellidos, :edad, :sexo, :fecha_nac, :curriculum)");
    $stmt->execute($empleado);
}

function verDetalles($dni, $db){
    $stmt=$db->prepare("
    SELECT * FROM empleados WHERE dni=:dni");
    $stmt->execute([
        "dni" => $dni
    ]);
    $empleado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $empleado;
}

function borrarEmpleado($dni, $db){
    $stmt=$db->prepare("
    DELETE FROM empleados WHERE dni=:dni");
    $stmt->execute(["dni"=>$dni]);
}

function borrarTodo($db){
    $stmt=$db->prepare("
    DELETE FROM empleados");
    $stmt->execute();
}

function cargarVista($db){
    $listaEmpleados=obtenerLista($db);
    require "Views/index.view.php";
}

?>