<?php
    class Personaje 
    {
        protected $nombre;
        protected $tipo;
        protected $puntos=0; 
        protected $arma=array();

        public function __construct($nom){
            $this->nombre=$nom;
        }
        public function luchar(){
            
        }
         
        public function conseguirArma($arma){
            //Añadira un arma al array armas;
            $this->arma[]=$arma;
        }
    }
?>