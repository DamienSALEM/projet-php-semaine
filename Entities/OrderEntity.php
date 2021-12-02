<?php

class OrderModel {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $state;


    public function getId() {

        return $this->id;
    
    }

    public function getDate() {

        return $this->date;

    }

    public function getState() {

        return $this->state;

    }

    public function setState(string $state) {

        $this->state = $state;

    }
}