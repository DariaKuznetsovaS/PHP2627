<?php

require_once __DIR__ . "vendor/autoload.php";

use Ejercicio3\Admin;
use Ejercicio3\RegularUser;
use Faker\Factory;

$faker = Factory::create('es_ES');

echo "<h2>Administradores</h2>";

for ($i = 0; $i < 5; $i++) {

    $admin = new Admin(
        $faker->userName(),
        $faker->firstName(),
        $faker->lastName(),
        $faker->safeEmail(),
        $faker->password(),
        $faker->randomElement([1, 2, 3])
    );

    $admin->showActions();
    $admin->login();
    $admin->desactivarUsuario();
    $admin->logout();

    echo "<p>Administrador: " . $admin->getUsername() . "</p>";
}

echo "<h2>Usuarios normales</h2>";

for ($i = 0; $i < 5; $i++) {

    $usuario = new RegularUser(
        $faker->userName(),
        $faker->firstName(),
        $faker->lastName(),
        $faker->safeEmail(),
        $faker->password(),
        $faker->userName(),
        $faker->userName()
    );

    $usuario->showActions();
    $usuario->login();
    $usuario->editarPerfil();
    $usuario->logout();

    echo "<p>Usuario: " . $usuario->getUsername() . "</p>";
}
?>