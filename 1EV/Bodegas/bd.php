<?php
$host="localhost";
$dbname="dasha-bodegas";
$user="root";
$pass="";

$db=connect($host, $dbname, $user, $pass);

function connect($host, $dbname, $user, $pass){
    try {
        $dbh = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user,
            $pass
        );

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbh;

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}