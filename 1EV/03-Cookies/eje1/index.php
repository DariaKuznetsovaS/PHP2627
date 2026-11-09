<?php


$mensaje="";
if(isset($_GET["user"])){
    $user=$_GET["user"];
    setcookie("user",$user);
}

if(isset($_GET["borrar"])){
    setcookie("user", NULL, -1);
}
    if(!isset($_COOKIE["user"])){
        $mensaje="No hay ningun usuario almacenado.";
        
    } else{
        $mensaje="Último nombre almacenado: ".$_COOKIE["user"];
    }



require "index.view.php";

?>