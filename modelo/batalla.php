<?php
    class Batalla {
        private $resultado;

        public function __construct(){
            header('Location: ../vista/combate.php');
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
