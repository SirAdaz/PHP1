<?php

require_once "AbstractForm.php";

class Cercle extends AbstractForm{

    private $rayon;
    private $hauteur;
    public function __construct($rayon){
        $this->rayon = $rayon;
    }
    public function calculerSurface(){
        $pi = 3.14;
        return ($this->rayon * $this->rayon) * $pi;
    }
    public function details(){
        $pi = 3.14;
        echo"Cercle \n";
        echo "Surface:". ($this->rayon * $this->rayon) * $pi . "\n";
        echo"---------";
    }
}