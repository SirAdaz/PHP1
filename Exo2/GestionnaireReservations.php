<?php

require_once "Spectacle.php";
require_once "Reservation.php";

class GestionnaireReservations {
    private $spectacles = [];
    private $reservations = [];

    public function ajouterSpectacle($spectacle) {
        $this->spectacles[] = $spectacle;
    }

    public function reserverPlaces($nomSpectacle, $nameSpectator, $nombrePlaces) {
        foreach ($this->spectacles as $spectacle) {
            $details = $spectacle->getDetailsReservation();
            $lieu = $details['lieu'];
            $date = $details['date'];
            $this->reservations[] = [
                'nomSpectacle' => $nomSpectacle,
                'nameSpectator' => $nameSpectator,
                'nbPlace' => $nombrePlaces,
                'lieu' => $lieu,
                'date' => $date
            ];
        }
    }

    public function afficherDetailsReservations() {
        foreach ($this->reservations as $reservation) {
            echo "Spectacle: " . $reservation['nomSpectacle'] . "\n";
            echo "Nom du spectateur: " . $reservation['nameSpectator'] . "\n";
            echo "Nombre de places réservées: " . $reservation['nbPlace'] . "\n";
            echo "\n";
        }
    }

    public function afficherDetailsSpectacles() {
        echo "Détails des spectacles:\n";
        foreach ($this->spectacles as $spectacle) {
            $details = $spectacle->getDetailsReservation();
            echo "Nom: " . $details['nom'] . "\n";
            echo "Date: " . $details['date'] . "\n";
            echo "Lieu: " . $details['lieu'] . "\n";
            echo "\n";
        }
    }
}