<?php

require_once "Spectacle.php";
require_once "Theatre.php";
require_once "Concert.php";
require_once "Reservation.php";
require_once "GestionnaireReservations.php";

$gestionnaire = new GestionnaireReservations();


$theatre1 = new Theatre('Roméo et Juliette', '2024-08-01', 'Théâtre National');
$concert1 = new Concert('Symphonie en Ré', '2024-08-02', 'Salle des Concerts');

$gestionnaire->ajouterSpectacle($theatre1);
$gestionnaire->ajouterSpectacle($concert1);


$gestionnaire->reserverPlaces('Roméo et Juliette', 'Alice Dupont', 2);
$gestionnaire->reserverPlaces('Symphonie en Ré', 'Bob Martin', 4);


$gestionnaire->afficherDetailsReservations();

$gestionnaire->afficherDetailsSpectacles();