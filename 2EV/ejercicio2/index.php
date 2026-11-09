
<?php

require_once __DIR__ . '/vendor/autoload.php';
//require_once __DIR__ . '/src/Paciente.php';
//Ya no se necesita si se usa el use, lo localiza el Composer
use Ejercicio2\Paciente;

// Comprobamos qué acción ha seleccionado el usuario
if (isset($_GET['accion'])) {

    // Creamos un paciente
    $paciente = new Paciente('Daria', 'Kuznetsova', 31);

    if (isset($_GET['accion'])) {

    $paciente = new Paciente('Daria', 'Kuznetsova', 31);

    $paciente->realizarAccion($_GET['accion']);
}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Paciente</title>
</head>
<body>

    <h1>Gestión de paciente</h1>

    <a href="index.php?accion=enfermar">Enfermar</a>
    <br>
    <a href="index.php?accion=curar">Curar</a>

</body>
</html>
