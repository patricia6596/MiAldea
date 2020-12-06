<?php
    class Mago extends Personaje {
        public $Baston;
        public $Fuego;

        public function __construct($nom, $nick, $contr){
          parent::__construct($nom, $nick, $contr);
          $this->tipo='mago';
        } 
    }
?>