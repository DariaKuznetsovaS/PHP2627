
<?php

namespace Ejercicio3;

class RegularUser extends User {

    private $twitter;
    private $instagram;

    public function __construct($username, $nombre, $apellidos, $email, $password, $twitter, $instagram) {

        parent::__construct($username, $nombre, $apellidos, $email, $password);

        $this->twitter = $twitter;
        $this->instagram = $instagram;
    }

    public function showActions() {
        echo "Acciones de usuario:<br>";
        echo "- Editar perfil<br>";
    }

    public function editarPerfil() {
        $this->log->info("El usuario " . $this->username . " ha editado su perfil");
    }

    public function getTwitter() {
        return $this->twitter;
    }

    public function setTwitter($twitter) {
        $this->twitter = $twitter;
    }

    public function getInstagram() {
        return $this->instagram;
    }

    public function setInstagram($instagram) {
        $this->instagram = $instagram;
    }
}
