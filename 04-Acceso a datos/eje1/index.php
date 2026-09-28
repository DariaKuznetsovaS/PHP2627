<?php
$dbname="dasha-eje1";
$host="localhost";
$user="root";
$pass="";

$nombre=$_GET["nombre"];
$apellidos=$_GET["apellidos"];

$db=connect($host, $dbname, $user, $pass);
$alumno=consultarAlumno($db, $nombre, $apellidos);
insertarAlumno($db);
//CREA una conexión a la BD:
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


 //CREA una consulta
function consultarAlumno($db, $nombre, $apellidos){
    $data=array("nombre"=>$nombre, "apellidos"=>$apellidos);
    $stmt=$db->prepare(
        "SELECT * FROM alumnos
        WHERE nombre=:nombre AND apellidos=:apellidos"
    );

    $stmt->execute($data);

   $alumno=$stmt->fetch(PDO::FETCH_ASSOC);
   return $alumno;
}
 //INSERTA un nuevo registro:
 function insertarAlumno($db){
    $data=array("nombre"=>"Dasha", 
    "apellidos"=>"Kuznetsova",
    "email"=>"dasha@php.net",
    "edad"=>31
    );
    $stmt=$db->prepare(
        "INSERT INTO alumnos(nombre, apellidos, email, edad) 
        VALUES(:nombre, :apellidos, :email, :edad)");
    $stmt->execute($data);
 }


require "index.view.php";
?>