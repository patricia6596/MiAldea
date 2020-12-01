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
    
    public function mejorarCasa($personaje){
        $personaje->devolverPuntos();
        if($personaje->devolverPuntos()>='10' && $personaje->devolverPuntos() < '15'){
        $eleccion=1;
        if($eleccion == '1'){
            $objetos = new Objeto();
            echo '<h3>casas:</h3>';
            $objetos->establecer_casa('
            madera,
            enhorabuena ya tienes tu casa de madera,
            ');
            return $objetos->obtener_casa();
            }else{
                echo 'los puntos se acumulan';
            }
        }
    }
    public function mejorarArma($personaje){
        if($personaje->devolverPuntos()>='15'){
            echo '<h3>Aqui podemos elegir entre armas o casas:</h3>';
            $eleccion=1;
            if($eleccion == '1'){
                $objetos = new Objeto();
                $objetos->establecer_arma('
                espada,
                Enhorabuena has obtenido una espada
                ');
                 return $objetos->obtener_arma();
            }else {
                $objetos = new Objeto();
                echo '<h3>casas:</h3>';
                $objetos->establecer_casa('
                madera,
                seguir acumulando puntos,
                ');
                return $objetos->obtener_casa();
            }
        }else{
            echo 'Sigue intentandolo';
        }  
    }
}