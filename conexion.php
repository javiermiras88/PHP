<?php
$dsn = "mysql:dbname=jardineria;host=localhost";
$usuario = "root";
$pass = "";

try {
    $pdo = new PDO ($dsn,
                    $usuario,
                    $pass,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $ex) {
}



?>