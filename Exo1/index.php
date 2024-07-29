<?php

require_once "Cercle.php";
require_once "Rectangle.php";
require_once "Triangle.php";
require_once "GestionnaireFormes.php";

$cercle = new Cercle(25);
$rectangle = new Rectangle(50,30);
$triangle = new Triangle(5,10);

$gestionaire = new GestionnaireFormes();
$gestionaire ->ajouterForme($cercle );
$gestionaire ->ajouterForme($rectangle);
$gestionaire ->ajouterForme($triangle);
// Calcul de la surface totale
echo "Surface totale: " . $gestionaire->calculerSurfaceTotale() . "\n";

// Affichage des détails des formes
$gestionaire->afficherDetailsFormes();