<?php

//CORS PERMISOS todos los servidores pueden acceder a este documento * significa todos

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET,OPTIONS");

header("Content_Type:application/json");


include_once('conexion.php');

function lista(){

global $enlace;

$resultado = mysqli_query($enlace,'SELECT * FROM articulo');

while ($fila = mysqli_fetch_array($resultado)){
	$todos[] = $fila;
}

return $todos;

}


if($_SERVER['REQUEST_METHOD'] === 'GET'){

$resultado = lista();


}else{
	header('HTTP/1.1 405 Method Not Allowed');
	exit;


}


echo json_encode($resultado);



?>