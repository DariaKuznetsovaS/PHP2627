<?php

if (isset($_POST["asunto"]) &&
    isset($_POST["email"]) &&
    isset($_POST["motivo"]) &&
    isset($_POST["mensaje"])) {

    $asunto = $_POST["asunto"];
    $email = $_POST["email"];
    $motivo = $_POST["motivo"];
    $mensaje = $_POST["mensaje"];

    require "enviado.view.php";

} else {

    require "index.view.php";

}