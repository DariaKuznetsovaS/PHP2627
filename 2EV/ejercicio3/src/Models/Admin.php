<?php
namespace Ejercicio3;

class Admin extends User {

    private $admin_level;

    public function __construct($username, $nombre, $apellidos, $email, $password, $admin_level) {

        // Constructor de la clase padre
        parent::__construct($username, $nombre, $apellidos, $email, $password);

        $this->registrarLog('Admin::__construct');

        // Comprobar que el nivel sea válido
        if (!in_array($admin_level, [1, 2, 3])) {
            throw new \InvalidArgumentException("Nivel de administrador no válido");
        }

        $this->admin_level = $admin_level;
    }

    public function showActions() {

        $this->registrarLog('Admin::showActions');

        echo "Acciones de administrador:<br>";
        echo "- Desactivar usuarios<br>";
    }

    public function desactivarUsuario() {

        $this->registrarLog('Admin::desactivarUsuario');

        echo "Usuario desactivado";
    }

    public function getAdminLevel() {

        $this->registrarLog('Admin::getAdminLevel');

        return $this->admin_level;
    }

    public function setAdminLevel($admin_level) {

        $this->registrarLog('Admin::setAdminLevel');

        if (!in_array($admin_level, [1, 2, 3])) {
            throw new \InvalidArgumentException("Nivel de administrador no válido");
        }

        $this->admin_level = $admin_level;
    }
}
