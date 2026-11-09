<?php
require __DIR__ . "/vendor/autoload.php";
use SebastianBergmann\Timer\Timer;

$timer=new Timer;

$timer->start();
   
    for($x=0; $x<100000; $x++){
        $numero = random_int(1, 1000);
        echo $numero . "<br>";
    }
    
$duracion=$timer->stop();

echo "<h3>Tiempo empleado: " . $duracion->asString() . "</h3>";

?>