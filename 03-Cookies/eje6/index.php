<?php

session_start();

$mensaje = "";

$usuarios = array(
    "user1" => array(
        "user" => "Qwerty",
        "pass" => "qwerty123"
    ),
    "user2" => array(
        "user" => "Random",
        "pass" => "random"
    ),
    "user3" => array(
        "user" => "admin",
        "pass" => "admin"
    )
);


// INICIAR CONTADOR DE INTENTOS

if (!isset($_SESSION["intentos"])) {
    $_SESSION["intentos"] = 0;
}


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

    // Comprobar primero si ya ha superado los intentos
    if ($_SESSION["intentos"] >= 3) {

        $mensaje = "Has superado el número máximo de intentos en esta sesión";

    } else {

        $user = $_POST["user"];
        $pass = $_POST["pass"];

        $resultado = comprobarCredenciales($user, $pass, $usuarios);

        switch ($resultado) {

            case 1:
                $_SESSION["intentos"]++;
                $mensaje = "El usuario no existe";
                break;

            case 2:
                $_SESSION["intentos"]++;
                $mensaje = "La contraseña es incorrecta";
                break;

            case 3:
                cargarSesion($user);
                break;
        }
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