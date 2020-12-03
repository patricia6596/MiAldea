<?php
    require_once 'controlador/incluirficheros.php';
    $personaje1=New Guerrero('Javis','pechuss','soytontso');
    echo $personaje1;
    echo " <br>";
    $batalla=new Batalla();
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    echo $personaje1->devolverPuntos();
    
    echo " <br>";

    echo '<h1>Objetos</h1>';

    echo '<h2>Crear objetos</h2>';

    $objeto1= new Objeto();
    echo $objeto1->mejorarCasa($personaje1,$personaje1->getNick());
    //echo $objeto1->mejorarArma($personaje1);

    echo 'Conectando a la base de datos<br>';
    $conexion=new Db();
    $modificacion=new Jugadores($conexion);
    echo $modificacion->consultar('nick','patri','casa');
    echo "<br>";
    //$conexion->insertar($personaje1->getNombre(), $personaje1->getNick(), $personaje1->getContr(), $personaje1->getTipo(), $personaje1->getCasa(), $personaje1->getArma());
    echo "<br>";
    $personaje2=new Arquero('Patricia','pattricia','adios');
    //$conexion->insertar($personaje2->getNombre(), $personaje2->getNick(), $personaje2->getContr(), $personaje2->getTipo(), $personaje2->getCasa(), $personaje2->getArma());
?>