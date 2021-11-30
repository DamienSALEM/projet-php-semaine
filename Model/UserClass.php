<?php

class User {

    public function __construct() {

        $this->pdo = (new Database)->getPDO();
    
    }

    public function getUsers() {

        $query = $this->pdo->query("SELECT * FROM user");
        $query->setFetchMode(\PDO::FETCH_OBJ); // retourne les valeurs en objet
        $users = $query->fetchAll();

    }

    public function getUser(int $id) {

        $query = $this->pdo->query("SELECT * FROM user WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_OBJ);
        $user = $query->fetch();
    }

    public function addUser(string $lastName, string $firstName, string $email, string $password) {

        if(!empty($lastName) && !empty($firstName) && !empty($email) && !empty($password)) {
            $prepare = $this->pdo->prepare("INSERT INTO user VALUES (null, $firstName, $lastNames, $email, $password)");
            $prepare->execute($user);
        }

    }
}

?>