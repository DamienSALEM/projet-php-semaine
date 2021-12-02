<?php

class AdminEntity {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $password;


    public function getId() {

        return $this->id;
    }

    public function getUserName() {

        return $this->username;
    }

    public function setUserName(string $userName) {

        $this->userName = $userName;
    }

    public function getPassword() {
        
        return $this->password;
    
    }

    public function setPassword(string $password) {

        $this->password = $password;

    }


}