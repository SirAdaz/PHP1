<?php

require_once "AbstractForm.php";

class Rectangle extends AbstractForm{

    private $largeur;
    private $longueur;
    public function __construct($largeur, $longueur){
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }
    public function calculerSurface(){
        return $this->largeur * $this->longueur;
    }
    public function details() {
        echo"Rectangle \n";
        echo "Surface:" . $this->largeur * $this->longueur . "\n";
        echo"---------";
    }
}