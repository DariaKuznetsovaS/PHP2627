<?php
require __DIR__ . "/vendor/autoload.php";

use eftec\bladeone\BladeOne;

$blade = new BladeOne();


echo $blade->run("bienvenida",["nombre"=>$_GET["nombre"]]);