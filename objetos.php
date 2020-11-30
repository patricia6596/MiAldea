<?php

interface Casa {
	public function establecer_casa($lista);
	public function obtener_casa();
}

interface Arma {
	public function establecer_arma($pasos);
	public function obtener_arma();
}

class Objeto implements Casa, Arma {
    private $casa;
	private $arma;

    public function establecer_casa($lista) {
        $this->casa = explode(',', $lista);
        }

    public function obtener_casa() {
        $num_casa = count($this->casa);
    
        $html = '<ul>';
        for ($i=0; $i < $num_casa; $i++) { 
            $html .= '<li>' . $this->casa[$i] . '</li>';
            }
            $html .= '</ul>';
    
            return print($html);
        }

    public function establecer_arma($pasos) {
        $this->arma = explode('|', $pasos);
        }
    
    public function obtener_arma() {
        $num_armas = count($this->arma);
    
        $html = '<ol>';
        for ($i=0; $i < $num_armas; $i++) { 
            $html .= '<li>' . $this->arma[$i] . '</li>';
            }
            $html .= '</ol>';
    
            return print($html);
        }
    
    /*
    public function mejorar(){
        
        if(Personaje::$puntos>=10){
            echo "puedes obtener una casa o seguir acumulando puntos";
            echo " <br>";
        } else if(Personaje::$puntos>=15){
            echo "puedes obtener una casa o mejorar tu arma";
            echo " <br>";
        }else {
            echo "todavia no tienes la posibilidad de mejorar, sigue luchando!";
            echo " <br>";
        }
        }
    }
*/
}