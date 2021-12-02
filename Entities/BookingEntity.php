<?php

class BookingEntity {

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $nbPeople;

    /**
     * @var string
     */
    private $dateTime;


    public function getId() {

        return $this->id;
    
    }

    public function getNbPeople() {

        return $this->$nbPeople;

    }

    public function setNbPeople(number $nbPeople) {
        
        $this->nbPeople = $nbPeople;

    }

    public function getDateTime() {

        return $this->dateTime;

    }

    public function setDateTime(string $dateTime) {

        $this->dateTime = $dateTime;

    }
}