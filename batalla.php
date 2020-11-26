<?php

    class Batalla {
        public $resultado;

    
    public function __construct($result){
        $this->resultado=$result;
    }

    public function luchan(){
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

}

