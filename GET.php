<?php
  
    require 'conexion.php';
    $sql = "select * from productos where Descripcion = ?";
    $st = $pdo->prepare($sql);
    $st->execute(array($_GET['Descripcion']));
    $result = $st->fetchAll(PDO::FETCH_ASSOC); 
    echo (json_encode($result,TRUE));