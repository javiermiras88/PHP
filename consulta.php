<?php
  
    require 'conexion.php';
    $sql = "select * from productos group by Gama";
    $st = $pdo->prepare($sql);
    $st->execute();
    $result = $st->fetchAll(PDO::FETCH_ASSOC); 
    echo (json_encode($result,TRUE));