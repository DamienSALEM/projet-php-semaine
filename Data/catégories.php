<?php
require_once "..\Controller\connectToBDD.php";
class categorie extends DBconn
{
    public function __construct()
    {
        // $db = new Database;
        // $this->pdo = $db->getPDO();
        $this->pdo = (new DBconn)->getPDO();
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
        // $id = $_GET["id"];
        $query = $this->pdo->query("SELECT * FROM categorie WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_OBJ);
        $categorie = $query->fetch();
    }
}
$categorieClass = new Categorie;
if (isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"])) {
    $categorieClass->getCategorie($_GET["id"]);
} else {
    $categorieClass->getCategories();
}
