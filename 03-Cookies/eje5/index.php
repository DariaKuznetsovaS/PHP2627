<?php
session_start();
$mensaje="";
if(isset($_POST["user"])&&isset($_POST["pass"])){
    $user=$_POST["user"];
    $pass=$_POST["pass"];
}
$usuarios=array(
    "user1"=>array(
        "user"=>"Qwerty",
        "pass"=>"qwerty123"
    ),
    "user2"=>array(
        "user"=>"Random",
        "pass"=>"random"
    ),
    "user3"=>array(
        "user"=>"admin",
        "pass"=>"admin"
    )
);

$resultado=comprobarCredenciales($user,$pass,$usuarios);
  switch($resultado){
    case 1: $mensaje= "El user no existe";
    break;
    case 2: $mensaje= "La contraseña es incorrecta";
    break;
    case 3: cargarSesion($user, $pass);
    break;
  }

function comprobarCredenciales($user, $pass, $usuarios){
if(!array_key_exists($user, $usuarios)){
    return 1;
} elseif($pass!==$usuarios[$user]["pass"]){
    return 2;
} else return 3;
}

function cargarSesion($user, $pass){
    $_SESSION[$user][$pass];
    cargarBienvenida();
}


function cargarBienvenida(){
    require "index.view.bienvenida.php";
}

if(isset($_POST["borrar"])){
    session_destroy();
}


require "index.view.php";
?>