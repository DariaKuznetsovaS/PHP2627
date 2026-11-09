
<?php

namespace Ejercicio3;

class Admin extends User {

    private $admin_level;

    public function __construct($username, $nombre, $apellidos, $email, $password, $admin_level) {

        //constructor de la clase padre
        parent::__construct($username, $nombre, $apellidos, $email, $password);

        // Comprobar que el nivel sea válido
        if (!in_array($admin_level, [1, 2, 3])) {
            throw new \InvalidArgumentException("Nivel de administrador no válido");
        }

        $this->admin_level = $admin_level;
    }

    public function showActions() {
        echo "Acciones de administrador:<br>";
        echo "- Desactivar usuarios<br>";
    }

    public function desactivarUsuario($username) {
        $this->log->warning("El administrador " . $this->username . " ha desactivado al usuario " . $username);
    }

    public function getAdminLevel() {
        return $this->admin_level;
    }

    public function setAdminLevel($admin_level) {

        if (!in_array($admin_level, [1, 2, 3])) {
            throw new \InvalidArgumentException("Nivel de administrador no válido");
        }

        $this->admin_level = $admin_level;
    }
}
