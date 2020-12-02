<?php
    class Personaje {
        protected $nombre;
        protected $nick;
        protected $contr;
        protected $tipo;
        protected $casa;
        private $puntos;
        protected $arma;

        public function __construct($nom, $nick, $contr){
            $this->nombre=$nom;
            $this->nick=$nick;
            $this->contr=$contr;
            $this->puntos=0;
            $this->casa='paja';
            $this->arma='nivel1';
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getNick(){
            return $this->nick;
        }
        public function getContr(){
            return $this->contr;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function getCasa(){
            return $this->casa;
        }
        public function getArma(){
            return $this->arma;
        }
        public function luchar($resultado){
            //Llama a la funcion luchan de personajes
            if($resultado==1){
                //Gana
                $this->puntos=$this->puntos+3;
                echo "Has ganado, recibes 3 puntos";
            } elseif ($resultado==2){
                //Empata
                $this->puntos=$this->puntos+1;
                echo "Has empatado, recibes 1 puntos";
            } else {
                //Pierde
                $this->puntos=$this->puntos-1;
                echo "Has perdido te quitan 1 puntos";
            }
        }
        public function devolverPuntos(){
            return $this->puntos;
        }
        public function __toString(){
            return "El personaje se llama $this->nick";
        }
    }
?>