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
    if(isset($_POST['mejorarPersonaje'])){
        session_start();
        $nick=$_SESSION['user'];
        $conexion=new Db();
        $modificacion=new Jugadores($conexion);
        $vector=$modificacion->devolverDatos($nick);
        $nombre=$vector['nombre'];
        $contr=$vector['contr'];
        $personaje=new Personaje($nombre, $nick, $contr);
        $personaje->actualizarPersonaje($nick);
        $arma=new Arma;
        $arma->mejorarObjeto($personaje);
        header('Location: ../vista/usuario.php');
    }
    if(isset($_POST['mejorarCasa'])){
        session_start();
        $nick=$_SESSION['user'];
        $conexion=new Db();
        $modificacion=new Jugadores($conexion);
        $vector=$modificacion->devolverDatos($nick);
        $nombre=$vector['nombre'];
        $contr=$vector['contr'];
        $personaje=new Personaje($nombre, $nick, $contr);
        $personaje->actualizarPersonaje($nick);
        $casa=new Casa;
        $casa->mejorarObjeto($personaje);
        header('Location: ../vista/usuario.php');
    }
    if(isset($_POST['luchar'])){
        session_start();
        $nick=$_SESSION['user'];
        $conexion=new Db();
        $modificacion=new Jugadores($conexion);
        $vector=$modificacion->devolverDatos($nick);
        $nombre=$vector['nombre'];
        $contr=$vector['contr'];
        $personaje=new Personaje($nombre, $nick, $contr);
        $personaje->actualizarPersonaje($nick);
        $batalla=new Batalla();
        $personaje->luchar($batalla);
    }
    if(isset($_POST['salir'])){
        session_destroy();
        header('Location: ../vista/index.php');
    }
?>