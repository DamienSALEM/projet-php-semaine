<?php

class CategorieEntity {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    public function getId() {

        return $this->id;
    
    }

    public function getName() {

        return $this->$name;

    }
}