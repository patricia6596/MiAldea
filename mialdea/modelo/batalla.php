<?php
    class Batalla {
        private $resultado;

        public function __construct(){
           echo 'Vas a luchar';
           sleep(3);
           $this->resultadoBatalla();

        } 

        private function resultadoBatalla(){
           $this->resultado=rand(1,3);
        }

        public function devolverResultado(){
            return $this->resultado;
        }


}
?>
