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
        //instancia el método
        $personaje->devolverPuntos();
        //condicional que te establece una casa si consigue 10 puntos o si los almacena
        if($personaje->devolverPuntos()>='10'){
            $conexion=new Db();
            $mejora_casa=new Jugadores($conexion);
            if($mejora_casa->consultarMejora('nick',$personaje->getNick(),'casa')=='paja'){
                $mejora_casa->actualizar('casa','madera',$personaje->getNick());
            }elseif($mejora_casa->consultarMejora('nick',$personaje->getNick(),'casa')=='madera'){
                $mejora_casa->actualizar('casa','ladrillo',$personaje->getNick());
            }
            }else{
                echo "Todavia no se puede la mejorar casa, siga intentandolo";
            }
    }
}

class Arma implements Objeto {
    //Función para mejorar el arma pasandole el objeto creado llamado
    //personaje
    public function mejorarObjeto(Personaje $personaje){
        //instancia el método
        $personaje->devolverPuntos();
        //condicional que te establece un arma si consigue 15 puntos 
        if($personaje->devolverPuntos()>='15'){
            $conexion=new Db();
            $mejora_arma=new Jugadores($conexion);
            echo '<h3>Aqui podemos elegir entre armas o casas:</h3>';
            if($mejora_arma->consultarMejora('nick',$personaje->getNick(),'arma')=='nivel1'){
                $mejora_arma->actualizar('arma','nivel2',$personaje->getNick());
            }elseif($mejora_arma->consultarMejora('nick',$personaje->getNick(),'arma')=='nivel2'){
                $mejora_arma->actualizar('arma','nivel3',$personaje->getNick());
            }
            }else{
                echo "Todavia no se puede la mejorar casa, siga intentandolo";
            }
        
    }
}

?>