<?php

    //Implementar el patron decorator
    class Guerrero extends Personaje {
        public $espada;
        public $escudo;

        public function __construct($nom, $nick, $contr){
            parent::__construct($nom, $nick, $contr);
            $this->tipo='guerrero';
        } 

        
    }

?>