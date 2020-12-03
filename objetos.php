<?php

//Estas clases están relacionadas con la clase objeto
//Cada uno de estos métodos abstractos hacen que se añada el método
//para añadir una Casa o un arma a la hora de conseguir puntos.
//Esté patrón de diseño es el abstact factory.
interface Casa {
	public function mejorarCasa($personaje,$nick);
}

interface Arma {
	public function mejorarArma($personaje);
}

class Objeto implements Casa, Arma  {
    private $Casa;
	private $Arma;
    
    //Función para mejorar la casa pasandole el objeto creado llamado
    //personaje
    public function mejorarCasa($personaje,$nick){
        //instancia el método

        $personaje->devolverPuntos();
        //condicional que te establece una casa si consigue 10 puntos o si los almacena
        if($personaje->devolverPuntos()>='10'){
            $mejora=new Sql();
            if($mejora->consultarMejora('nick',"$nick",'casa')=='paja'){
                $mejora->actualizar('casa','madera',"$nick");
            }elseif($mejora->consultarMejora('nick',"$nick",'casa')=='madera'){
                $mejora->actualizar('casa','ladrillo',"$nick");
            }
        }else{
            echo "Todavia no se puede la mejorar casa, siga intentandolo";
        }
    }
    //Función para mejorar el arma pasandole el objeto creado llamado
    //personaje
    public function mejorarArma($personaje){
        //instancia el método
        $personaje->devolverPuntos();
        //condicional que te establece un arma si consigue 15 puntos 
        if($personaje->devolverPuntos()>='15'){
            echo '<h3>Aqui podemos elegir entre armas o casas:</h3>';
            $eleccion=1;
            if($eleccion == '1'){
                
            }else {
                echo '<h3>casas:</h3>';
            }
        }else{
            echo 'Sigue intentandolo';
        }  
        
    }
}
?>