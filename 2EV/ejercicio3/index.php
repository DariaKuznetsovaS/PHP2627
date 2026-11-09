<?php

require_once __DIR__ . "vendor/autoload.php";

use Ejercicio3\Admin;
use Ejercicio3\RegularUser;

$admin = new Admin(
    "admin1", 
    "Daria",
    "kuznetsova",
    "admin@gmail.com",
    "1234",
    2
);

$user = new regularUser(
    "user1",
    "Ana",
    "Lopez",
    "ana@gmail.com",
    "1234",
    "@ana",
    "@ana_instagram"
);

echo "<h2>Admin</h2>";

$admin->showActions();
$admin->login();
$admin->desactivarUsuario('usuario1');
$admin->logout();

echo "Nivel de administrador: " . $admin->getAdminLevel();

// Probamos los métodos del usuario
echo "<h2>Usuario normal</h2>";

$usuario->showActions();
$usuario->login();
$usuario->editarPerfil();
$usuario->logout();

echo "Twitter: " . $usuario->getTwitter();
echo "<br>Instagram: " . $usuario->getInstagram();
echo "<br>Último acceso: " . $usuario->getUltimoAcceso()->format('d/m/Y H:i:s');

?>