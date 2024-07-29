<?php

require_once "AbstractForm.php";

class Triangle extends AbstractForm {

    private $base;
    private $hauteur;

    public function __construct($base, $hauteur) {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    public function calculerSurface() {
        return ($this->base * $this->hauteur) / 2;
    }

    public function details() {
        echo"Triangle \n";
        echo "Surface:" . $this->base * $this->hauteur / 2 . "\n";
        echo"---------";
    }
}