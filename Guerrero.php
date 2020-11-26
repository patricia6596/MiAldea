<?php

class Guerrero extends Personaje 
{
    public $espada;
    public $escudo ;

    public function __construct($nom)
    {
        parent::__construct($nom);
    }

    
}