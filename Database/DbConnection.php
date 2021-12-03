<?php

class DbConnection
{
    protected $pdo;

    public function __construct()
    {
        require_once(__ROOT__.'/Database/config.php');
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        try {

            $this->pdo = new PDO($dsn, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if ($this->pdo) {
               //echo "Connected to the $db database successfully!";
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
