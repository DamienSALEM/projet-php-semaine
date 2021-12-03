<?php

<<<<<<< HEAD

=======
>>>>>>> 9f0a14e9dba214397b25a1b5578563fb7ec6587f
class DbConnection
{
    protected $pdo;

    public function __construct()
    {
        require_once(__ROOT__.'/Database/config.php');
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        try {
    
            $this->pdo = new PDO($dsn, $user, $pass);

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
