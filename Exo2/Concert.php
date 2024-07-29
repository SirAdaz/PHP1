<?php

require_once "Spectacle.php";
require_once "Reservation.php";

class Concert implements Spectacle {
    private $name;
    private $date;
    private $lieu;
    private $reservations = [];

    public function __construct(string $name, string $date, string $lieu) {
        $this->name = $name;
        $this->date = $date;
        $this->lieu = $lieu;
    }

    public function reserverPlaces(string $nameSpectator, int $nombrePlaces){
        $this->reservations[] = new Reservation($nameSpectator, $nombrePlaces);
    }

    public function getDetailsReservation(){
        $detailsReservations = [];
        foreach($this->reservations as $reservation){
            $detailsReservations[] = $reservation->getDetails();
        }
        return[
            'nom' => $this->name,
            'date' => $this->date,
            'lieu' => $this->lieu,
            'reservations' => $detailsReservations,
        ];
    }
}
