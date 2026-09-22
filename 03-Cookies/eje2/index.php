<?php

if(isset($_POST["idioma"])){
    $idioma=$_POST["idioma"];
    set_cookie("idioma",$idioma, time()+60);
}
if(isset($_COOKIE["idioma"])){
    $idioma_cookie="";
}

require "index.view.php";
?>