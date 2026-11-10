<?php
namespace Ejercicio3;

use Monolog\Logger;
use Monolog\Level;
use Monolog\Handler\StreamHandler;

abstract class User {

    protected $username;
    protected $nombre;
    protected $apellidos;
    protected $email;
    protected $password;
    protected \DateTime $ultimo_acceso;
    protected $log;

    public function __construct($username, $nombre, $apellidos, $email, $password) {

        $this->username = $username;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->ultimo_acceso = new \DateTime();

        // Logger
        $this->log = new Logger('usuarios');

        // Indica dónde se guardan los logs
        $this->log->pushHandler(
            new StreamHandler(
                __DIR__ . '/../../app.log',
                Level::Info
            )
        );
    }

    abstract public function showActions();

    public function login() {
        $this->ultimo_acceso = new \DateTime();
        $this->log->info("El usuario " . $this->username . " ha iniciado sesión");
    }

    public function logout() {
        $this->log->info("El usuario " . $this->username . " ha cerrado sesión");
    }

    protected function registrarLog($metodo) {
    $this->log->info(
        "Ejecutando el método " . $metodo .
        " por el usuario " . $this->username
    );
}

    // Getters y setters

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getUltimoAcceso() {
        return $this->ultimo_acceso;
    }

    public function setUltimoAcceso(\DateTime $ultimo_acceso) {
        $this->ultimo_acceso = $ultimo_acceso;
    }
}
