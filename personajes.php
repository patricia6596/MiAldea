<?php
    class Personaje {
        protected $nombre;
        protected $tipo;
        protected $puntos=0; 
        protected $arma=array();
        public function __construct($nom){
            $this->nombre=$nom;
        }
        public function luchar(){
            $resultado=rand(1,3);
            if($resultado==1){
                //Gana
                $this->puntos=$this->puntos+3;
            } elseif ($resultado==2){
                //Empata
                $this->puntos=$this->puntos+1;
            }else{
                //Pierde
                $this->puntos=$this->puntos-1;
            }
        }
        public function conseguirArma($arma){
            //Añadira un arma al array armas;
            $this->arma[]=$arma;
        }
    }
?>
