<?php
    class Personaje {
        protected $nombre;
        protected $tipo;
        private $puntos; 
        protected $arma=array();

        public function __construct($nom){
            $this->nombre=$nom;
            $this->puntos=0;
        }
        public function luchar($resultado){
            //Llama a la funcion luchan de personajes
            if($resultado==1){
                //Gana
                $this->puntos=$this->puntos+3;
                echo "Has ganado recibes 3 puntos";
            } elseif ($resultado==2){
                //Empata
                $this->puntos=$this->puntos+1;
                echo "Has empatado recibes 1 puntos";
            } else {
                //Pierde
                $this->puntos=$this->puntos-1;
                echo "Has perdido te quitan 1 puntos";
            }
        }
        public function imprimirPuntos(){
            echo $this->puntos;
        }
        public function conseguirArma($arma){
            //Añadira un arma al array armas;
            $this->arma[]=$arma;
        }
        public function __toString(){
            return "El personaje se llama $this->nombre";
        }
    }
?>
 