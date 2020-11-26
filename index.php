<?php
    require_once 'personajes.php';
    require_once 'batalla.php';
    require_once 'Guerrero.php';
    require_once 'arquero.php';
    $personaje1=New Personaje('Javi');
    echo $personaje1;
    $batalla=new Batalla();
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->luchar($batalla->luchan());
    echo " <br>";
    $personaje1->imprimirPuntos();

?>