<?php

    class Batalla {
        public $resultado;

        public function luchan(){
            $this->resultado=rand(1,3);
            return $this->resultado;
        }

}

