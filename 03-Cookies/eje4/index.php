<?php
session_start();

if (!isset($_SESSION["asistentes"])) {
    $_SESSION["asistentes"] = [];
}

if (isset($_GET["nombre"])) {
    array_push($_SESSION["asistentes"], $_GET["nombre"]);
}

if (isset($_GET["borrar"])) {
    $_SESSION["asistentes"] = [];
}

$asistentes = $_SESSION["asistentes"];

require "index.view.php";
?>