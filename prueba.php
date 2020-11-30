<?php
    require_once 'conexion.php';
    echo 'Conectando a la base de datos';
    $conexion=new Db();
    $conexion->consultar();

?>