<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'../Database/connectToBDD.php');

class ProductController extends DBconn
{
    public function __construct() {
        $this->pdo = $this->getPDO();
    }

    public function getAllProducts() {
        $query = $this->pdo->query("SELECT * FROM products");
        $query->setFetchMode(PDO::FETCH_OBJ);

        return $query->fetchAll();
    }

    public function getProduct(int $id) {
        $query = $this->pdo->query("SELECT * FROM products WHERE id = $id");
        $query->setFetchMode(PDO::FETCH_OBJ);

        return $query->fetchAll();
    }

    public function addProduct(array $product) {
        $query = $this->pdo->prepare('INSERT INTO products VALUE (?, ?, ?, ?, ?, ?, ?, ?)');
        $query->execute($product);
    }

    public function deleteProduct() {

    }

    public function updateProduct() {

    }
}
