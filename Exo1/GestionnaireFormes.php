<?php
require_once "Cercle.php";
require_once "Rectangle.php";
require_once "Triangle.php";
require_once "AbstractForm.php";

class GestionnaireFormes{
    private $formes = [];

    public function ajouterForme(AbstractForm $forme) {
        $this->formes[] = $forme;
    }

    public function calculerSurfaceTotale() {
        $surfaceTotale = 0;
        foreach ($this->formes as $forme) {
            $surfaceTotale += $forme-> calculerSurface();
        }
        return $surfaceTotale;
    }

    public function afficherDetailsFormes() {
        foreach ($this->formes as $forme) {
            echo $forme->details() . "\n";
        }
    }
}