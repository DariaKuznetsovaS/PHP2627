<?php
require_once "database.php";

function getAll(): array {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM empleado");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getById(int $id): ?object {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM empleado WHERE id = :id");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $data = array(
        "id" => $id
    );
    $stmt->execute($data);
    return $stmt->fetchObject();
}

function getByName(string $nombre): array {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM empleado WHERE nombre = :nombre");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $data = array(
        "nombre" => $nombre
    );
    $stmt->execute($data);
    return $stmt->fetchAll();
}

function insert(array $empleado): void {
    //die(json_encode($empleado));
    try {
        $db = getDbConnection();
        $stmt = $db->prepare("INSERT INTO empleado (nombre, apellidos, email, dni, sexo, edad, fecha_nacimiento, curriculum)
                                VALUES (:nombre, :apellidos, :email, :dni, :sexo, :edad, :fecha_nacimiento, :curriculum)");

        $stmt->execute($empleado);
    } catch(Exception $e) {
        echo 'Exception -> ';
        var_dump($e->getMessage());
    }
}

function deleteById(int $id): void {
    $db = getDbConnection();
    $data = array(
        'id' => $id
    );
    $stmt = $db->prepare("DELETE FROM empleado WHERE id = :id");
    $stmt->execute($data);
}

function deleteAll(): void {
    $db = getDbConnection();
    $stmt = $db->prepare("DELETE FROM empleado");
    $stmt->execute();
}
