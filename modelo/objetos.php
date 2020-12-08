<?php

//Estas clases están relacionadas con la clase objeto
//Cada uno de estos métodos abstractos hacen que se añada el método
//para añadir una Casa o un arma a la hora de conseguir puntos.
//Esté patrón de diseño es el abstact factory.
// La interfaz Casa y Arma abstracta declara un grupo de métodos que
// devuelven distintas funciones abstractas. Estas funciones se
// denominan familia y están relacionados por un tema o concepto
// de alto nivel. Normalmente, las funciones de una familia
// pueden colaborar entre sí.
interface Objeto {
    public function mejorarObjeto(Personaje $personaje);
}

class Casa implements Objeto  {
    //Función para mejorar la casa pasandole el objeto creado llamado
    //personaje
    public function mejorarObjeto(Personaje $personaje){
        //Si tiene mas de 10 puntos el personaje mejora la casa
        if($personaje->devolverPuntos()>='10'){
            $conexion=new Db();
            $puntos=new Jugadores($conexion);
            $mejora_casa=new Jugadores($conexion);
            if($mejora_casa->consultarMejora('nick',$personaje->getNick(),'casa')=='paja'){
                $puntos->actualizar('puntos',$personaje->devolverPuntos()-10, $personaje->getNick());
                $mejora_casa->actualizar('casa','madera',$personaje->getNick());
            }elseif($mejora_casa->consultarMejora('nick',$personaje->getNick(),'casa')=='madera'){
                $puntos->actualizar('puntos',$personaje->devolverPuntos()-10, $personaje->getNick());
                $mejora_casa->actualizar('casa','ladrillo',$personaje->getNick());
            }else{
                echo "<p>Ya no puedes mejorar mas</p>";
            }
        }else{
            echo "<p>Todavia no se puede mejorar la casa, siga intentandolo</p>";
        }
    }
}

class Arma implements Objeto {
    //Función para mejorar el arma pasandole el objeto creado llamado
    //personaje
    public function mejorarObjeto(Personaje $personaje){
        //Si tiene mas de 15 puntos, mejora el personaje
        if($personaje->devolverPuntos()>='15'){
            $conexion=new Db();
            $puntos=new Jugadores($conexion);
            $mejora_arma=new Jugadores($conexion);
            if($mejora_arma->consultarMejora('nick',$personaje->getNick(),'arma')=='nivel1'){
                $puntos->actualizar('puntos',$personaje->devolverPuntos()-15, $personaje->getNick());
                $mejora_arma->actualizar('arma','nivel2',$personaje->getNick());
            }elseif($mejora_arma->consultarMejora('nick',$personaje->getNick(),'arma')=='nivel2'){
                $puntos->actualizar('puntos',$personaje->devolverPuntos()-15, $personaje->getNick());
                $mejora_arma->actualizar('arma','nivel3',$personaje->getNick());
            }else{
                echo "<p>Ya no puedes mejorar mas</p>";
            }
        }else{
            echo "<p>Todavia no se puede mejorar el arma, siga intentandolo</p>";
        }
    }
}

?>