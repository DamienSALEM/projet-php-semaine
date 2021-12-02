<?php

class DbConnection
{
    private $pdo;
    public function __construct()
    {
        require_once "config.php";
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        try {
            $this->pdo = new PDO($dsn, $user, $pass);

            if ($this->pdo) {
                echo "Connected to the $db database successfully!";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }
}