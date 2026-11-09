<?php

if(isset($_GET["idioma"])){
    $idioma=$_GET["idioma"];
    setcookie("idioma", $idioma, time()+60);
}
if(isset($_COOKIE["idioma"])){
    $idioma_cookie=$_COOKIE["idioma"];
}

require "index.view.php";
?>