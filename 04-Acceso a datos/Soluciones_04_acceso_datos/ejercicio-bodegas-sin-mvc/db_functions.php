<?php
require_once "database.php";

/* ---------------------------------------------------------------------
 * BODEGAS
 * ------------------------------------------------------------------- */

function getAllBodegas(): array
{
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM bodega ORDER BY nombre");
    $stmt->execute();

    return $stmt->fetchAll();
}

function getBodegaById(int $id): array|false{
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM bodega WHERE id = :id");
    $data = ["id" => $id];
    $stmt->execute($data);

    return $stmt->fetch();
}

function insertBodega(array $bodega): int
{
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO bodega (nombre, direccion, email, telefono, contacto, fundacion, descripcion, restaurante, hotel)
                            VALUES (:nombre, :direccion, :email, :telefono, :contacto, :fundacion, :descripcion, :restaurante, :hotel)");
    $stmt->execute($bodega);
    // Se añade el cast (int) porque PDO por defecto devuelve los IDs como cadenas de texto (string).
    return (int) $db->lastInsertId();
}

function updateBodega(array $bodega): void
{
    $db = getDbConnection();
    $stmt = $db->prepare("UPDATE bodega
                            SET nombre = :nombre, direccion = :direccion, email = :email, telefono = :telefono,
                                contacto = :contacto, fundacion = :fundacion, descripcion = :descripcion,
                                restaurante = :restaurante, hotel = :hotel
                            WHERE id = :id");
    $stmt->execute($bodega);
}

function deleteBodegaById(int $id): void{
    // Los vinos de la bodega se eliminan en cascada (ON DELETE CASCADE)
    $db = getDbConnection();
    $data = ["id" => $id];
    $stmt = $db->prepare("DELETE FROM bodega WHERE id = :id");
    $stmt->execute($data);
}

/* ---------------------------------------------------------------------
 * VINOS
 * ------------------------------------------------------------------- */

function getVinosByBodega(int $bodegaId): array{
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM vino WHERE bodega_id = :bodega_id ORDER BY nombre");
    $data = array(
        "bodega_id" => $bodegaId
    );
    $stmt->execute($data);

    return $stmt->fetchAll();
}

function getVinoById(int $id): array|false
{
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM vino WHERE id = :id");
    $data = array(
        "id" => $id
    );
    $stmt->execute($data);

    return $stmt->fetch();
}

function insertVino(array $vino): int
{
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO vino (bodega_id, nombre, descripcion, anio, alcohol, tipo)
                            VALUES (:bodega_id, :nombre, :descripcion, :anio, :alcohol, :tipo)");
    $stmt->execute($vino);

    return (int) $db->lastInsertId();
}

function updateVino(array $vino): void
{
    $db = getDbConnection();
    $stmt = $db->prepare("UPDATE vino
                            SET nombre = :nombre, descripcion = :descripcion, anio = :anio,
                                alcohol = :alcohol, tipo = :tipo
                            WHERE id = :id");
    $stmt->execute($vino);
}

function deleteVinoById(int $id): void
{
    $db = getDbConnection();
    $data = ["id" => $id];
    $stmt = $db->prepare("DELETE FROM vino WHERE id = :id");
    $stmt->execute($data);
}
