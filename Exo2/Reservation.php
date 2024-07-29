<?php

class Reservation {
    private $nameSpectator;
    private $nbPlace;

    public function __construct(string $nameSpectator, int $nbPlace){
        $this->nameSpectator = $nameSpectator;
        $this->nbPlace = $nbPlace;
    }

    public function getDetails() {
        return [
            'nameSpectator' => $this->nameSpectator,
            'nbPlace' => $this->nbPlace
        ];
    }
}
