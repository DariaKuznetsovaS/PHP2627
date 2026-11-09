<?php
require_once 'database.php';

function getAll(): array {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM items ORDER BY id DESC");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $stmt->fetchAll();
}

function insert(string $texto): bool {
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO items(texto) VALUES (:texto)");
    $datos = ['texto' => $texto];
    return $stmt->execute($datos);
}

function deleteById(int $id): bool {
    $db = getDbConnection();
    $stmt = $db->prepare("DELETE FROM items WHERE id = :id");
    $datos = ['id' => $id];
    return $stmt->execute($datos);
}

function deleteAll(): bool {
    $db = getDbConnection();
    $stmt = $db->prepare("DELETE FROM items");
    return $stmt->execute();
}
