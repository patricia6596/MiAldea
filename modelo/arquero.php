<?php
    class Arquero extends Personaje{

        public $Arco;
        public $Hiena;

        public function __construct($nom, $nick, $contr){
          parent::__construct($nom, $nick, $contr);
          $this->tipo='arquero';  
        } 
  
    }

?>
