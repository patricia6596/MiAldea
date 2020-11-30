<?php
    require_once 'incluirficheros.php';
    $personaje1=New Arquero('Javi');
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

    if($personaje1->devolverPuntos()>='10' && $personaje1->devolverPuntos() < '15'){
        $eleccion=1;
        if($eleccion == '1'){
            $objetos = new Objeto();
            echo '<h3>casas:</h3>';
            $objetos->establecer_casa('
            madera,
	        enhorabuena ya tienes tu casa de madera,
            ');
            $objetos->obtener_casa();
        }else{
            echo 'los puntos se acumulan';
        }
    }else if($personaje1->devolverPuntos()>='15'){
        echo '<h3>Aqui podemos elegir entre armas o casas:</h3>';
        $eleccion=1;
        if($eleccion == '1'){
            $objetos = new Objeto();
            $objetos->establecer_arma('
            espada,
            Enhorabuena has obtenido una espada
            ');
            $objetos->obtener_arma();
        } else {
            $objetos = new Objeto();
            echo '<h3>casas:</h3>';
            $objetos->establecer_casa('
            madera,
	        seguir acumulando puntos,
            ');
            $objetos->obtener_casa();
        }
    }else{
        echo 'Sigue intentandolo';
    }

   
?>