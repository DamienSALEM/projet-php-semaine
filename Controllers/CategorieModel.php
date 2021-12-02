<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'../Database/connectToBDD.php');

class CategorieModel extends DbConnection
{
    public function __construct()
    {
        $this->pdo = $this->getPDO();
    }

    public function getCategories()
    {
        $query = $this->pdo->query("SELECT * FROM categories");
        $query->setFetchMode(PDO::FETCH_OBJ);
        $categories = $query->fetchAll();
        var_dump($categories);
    }

    public function getCategorie(int $id)
    {
        $query = $this->pdo->query("SELECT * FROM categorie WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_OBJ);
        $categorie = $query->fetch();
    }
}
