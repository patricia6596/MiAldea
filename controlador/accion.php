<?php
    require_once '../controlador/incluirficheros.php';
    $conexion=new Db();
    $modificacion=new Jugadores($conexion);

    if(isset($_POST["iniciar"])){
       if($modificacion->iniciar($_POST["nick"],$_POST["contr"])){
            echo "Has iniciado sesion";
            session_start();
            $_SESSION['user']=$_POST['nick'];
            echo "<a href='../vista/usuario.php'>Ve a tu sesion</a>";
       }else{
            echo "Este usuario no existe";
            echo "<a href='../vista/index.php'>Vuelve a inicio</a>";
       }
    } 
    if(isset($_POST['registrar'])){
        if($modificacion->insertar( $_POST["nombre"],$_POST["nick"],$_POST["contr"],$_POST["tipo"])){
            echo "Registrado con exito";
        }
    }


?>