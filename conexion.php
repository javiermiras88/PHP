<?php

global $enlace;

$enlace = mysqli_connect('localhost:3306', 'root','', 'mercamira');


if(!$enlace){
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_error() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


?>
