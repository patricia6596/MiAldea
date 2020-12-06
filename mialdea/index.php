<?php
    require_once 'controlador/conexion.php';
    require_once 'modelo/jugadores.php';
    require_once 'modelo/personajes.php';
    require_once 'modelo/batalla.php';
    require_once 'modelo/guerrero.php';
    require_once 'modelo/arquero.php';
    require_once 'modelo/mago.php';
    require_once 'modelo/objetos.php';

    $personaje1=New Guerrero('Javis','pechuss','soytontso');
    echo $personaje1;
    echo " <br>";
    $batalla=new Batalla();
    $personaje1->luchar($batalla);
    echo " <br>";

 
    echo $personaje1->devolverPuntos();
    
    echo " <br>";

    echo '<h1>Objetos</h1>';

    echo '<h2>Crear objetos</h2>';

    $objeto1= new Casa();
    $objeto2= new Arma();
    $objeto1->mejorarObjeto($personaje1);
    $objeto2->mejorarObjeto($personaje1);

    echo 'Conectando a la base de datos<br>';
    $conexion=new Db();
    $modificacion=new Jugadores($conexion);
    echo $modificacion->consultar('nick','patri');
    echo "<br>";
    $modificacion->insertar($personaje1->getNombre(), $personaje1->getNick(), $personaje1->getContr(), $personaje1->getTipo(), $personaje1->getCasa(), $personaje1->getArma());
    echo "<br>";
    $personaje2=new Arquero('Patricia','pattricia','adios');
    $modificacion->insertar($personaje2->getNombre(), $personaje2->getNick(), $personaje2->getContr(), $personaje2->getTipo(), $personaje2->getCasa(), $personaje2->getArma());
?>