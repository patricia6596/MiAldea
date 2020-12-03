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
    public function mejorarObjeto($personaje,$nick);
}

class Casa implements Objeto  {
    //Función para mejorar la casa pasandole el objeto creado llamado
    //personaje
    public function mejorarObjeto($personaje,$nick){
        //instancia el método
        $personaje->devolverPuntos();
        //condicional que te establece una casa si consigue 10 puntos o si los almacena
        if($personaje->devolverPuntos()>='10'){
            $mejora_casa=new Sql();
            if($mejora_casa->consultarMejora('nick',"$nick",'casa')=='paja'){
                $mejora_casa->actualizar('casa','madera',"$nick");
            }elseif($mejora_casa->consultarMejora('nick',"$nick",'casa')=='madera'){
                $mejora_casa->actualizar('casa','ladrillo',"$nick");
            }
            }else{
                echo "Todavia no se puede la mejorar casa, siga intentandolo";
            }
    }
}

class Arma implements Objeto {
    //Función para mejorar el arma pasandole el objeto creado llamado
    //personaje
    public function mejorarObjeto($personaje,$nick){
        //instancia el método
        $personaje->devolverPuntos();
        //condicional que te establece un arma si consigue 15 puntos 
        if($personaje->devolverPuntos()>='15'){
            $mejora_arma=new Sql();
            echo '<h3>Aqui podemos elegir entre armas o casas:</h3>';
            if($mejora_arma->consultarMejora('nick',"$nick",'arma')=='nivel1'){
                $mejora_arma->actualizar('arma','nivel2',"$nick");
            }elseif($mejora_arma->consultarMejora('nick',"$nick",'arma')=='nivel2'){
                $mejora_arma->actualizar('arma','nivel3',"$nick");
            }
            }else{
                echo "Todavia no se puede la mejorar casa, siga intentandolo";
            }
        
    }
}

?>