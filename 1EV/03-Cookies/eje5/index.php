<?php

session_start();

$mensaje = "";

$usuarios = [
    "Qwerty" => [
        "pass" => "qwerty123"
    ],
    "Random" => [
        "pass" => "random"
    ],
    "admin" => [
        "pass" => "admin"
    ]
];

// ACCIONES
if (isset($_GET["accion"])) {

    switch ($_GET["accion"]) {

        case "borrar":
            session_destroy();
            break;
    }
}


// LOGIN
if (isset($_POST["user"]) && isset($_POST["pass"])) {

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $resultado = comprobarCredenciales($user, $pass, $usuarios);

    switch ($resultado) {

        case 1:
            $mensaje = "El usuario no existe";
            break;

        case 2:
            $mensaje = "La contraseña es incorrecta";
            break;

        case 3:
            cargarSesion($user);
            break;
    }
}


// FUNCIONES

function comprobarCredenciales($user, $pass, $usuarios)
{
    if (!array_key_exists($user, $usuarios)) {
        return 1;
    } elseif ($pass !== $usuarios[$user]["pass"]) {
        return 2;
    } else {
        return 3;
    }
}


function cargarSesion($user)
{
    $_SESSION["user"] = $user;
}


// MOSTRAR VISTA

if (isset($_SESSION["user"])) {

    $user = $_SESSION["user"];

    require "index.view.bienvenida.php";

} else {

    require "index.view.php";
}
?>