<?php
session_start();
// Datos de acceso de los usuarios:
$usuarios = array(
    "user1" => array(
        "nombre" => 'Ane',
        "apellidos" => 'López',
        "password" => '123Abc'
    ),
    "user2" => array(
        "nombre" => 'Amaia',
        "apellidos" => 'Otsoa',
        "password" => '456Xyz'
    )
);

// Codigos de los errores. En función del error se muestra su mensaje correspondiente.
$ERROR_TYPES = [
    1 => "La contraseña no es correcta.",
    2 => "El usuario no existe.",
    3 => "Has superado el número máximo de intentos en esta sesión."
];

// Máximo número de intentos permitidos
$MAX_INTENTOS = 3;

/**
 * Devuelve 0 si el login es correcto,
 * 1 si la contraseña es incorrecta
 * o 2 si el usuario no existe.
 */
function comprobarLogin(string $usuario, string $password, array $usuarios): int
{
    if (array_key_exists($usuario, $usuarios)) {
        if ($usuarios[$usuario]["password"] == $password) {
            $_SESSION["usuario"] = $usuario;
            return 0;
        } else {
            return 1;
        }
    } else {
        return 2;
    }
}

// Si no está logueado o nos envía la accion de salir:
if(!isset($_SESSION["login"]) || isset($_GET["accion"])) {
    $_SESSION["login"] = -1; // Utilizamos esta variable para almacenar el estado (login correcto, error)
    $_SESSION["usuario"] = "";
    $_SESSION["intentos"] = 0; // Inicializamos el contador de intentos
}

// Comprobamos el intento de login
if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    // Verificar si no se han superado los intentos máximos
    if (!isset($_SESSION["intentos"])) {
        $_SESSION["intentos"] = 0;
    }

    if ($_SESSION["intentos"] < $MAX_INTENTOS) {
        $resultado_login = comprobarLogin($_POST["usuario"], $_POST["password"], $usuarios);

        if ($resultado_login == 0) {
            // Login correcto, reseteamos intentos
            $_SESSION["login"] = 0;
            $_SESSION["intentos"] = 0;
        } else {
            // Login incorrecto, incrementamos intentos
            $_SESSION["intentos"]++;

            if ($_SESSION["intentos"] >= $MAX_INTENTOS) {
                $_SESSION["login"] = 3; // Código para máximo de intentos superado
            } else {
                $_SESSION["login"] = $resultado_login;
            }
        }
    } else {
        $_SESSION["login"] = 3; // Código para máximo de intentos superado
    }
}

// Si el usuario ha accedido correctamente, únicamente mostramos el mensaje de bienvenida:
if ($_SESSION["login"] == 0) {
    $nombre = $usuarios[$_SESSION['usuario']]['nombre'];
    $apellidos = $usuarios[$_SESSION['usuario']]['apellidos'];
    // Cargar la vista
    require "ejercicio05.view.php";
} else {
    if($_SESSION["login"] != -1) {
        // Si ha habido un error, guardamos el mensaje de error para mostrarlo en la vista.
        $mensaje_error = $ERROR_TYPES[$_SESSION["login"]];
        // Cargar la vista
        require "ejercicio05login.view.php";
    }
    else {
        // Cargar la vista con el formulario por primera vez
        require "ejercicio05login.view.php";
    }
}
