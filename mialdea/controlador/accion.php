<?php
    require_once '../controlador/incluirficheros.php';
    $conexion=new Db();
    $modificacion=new Jugadores($conexion);

    if(isset($_POST["iniciar"])){
       if($modificacion->iniciar($_POST["nick"],$_POST["contr"])){
        echo "Has iniciado sesion";
        echo "<a >"
       }
    } 



?>