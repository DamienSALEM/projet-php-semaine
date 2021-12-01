<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'../Database/connectToBDD.php');

class DefaultController extends DbConnection
{
    protected $table;

    public function __construct() {
        parent::__construct();
        $this->pdo = $this->getPDO();
    }

    public function checkPost() {
        if (isset($_POST)) return true;
    }

    public function find(int $id) {
        $query = $pdo->query("SELECT * FROM $table WHERE id = $id");
        $query->setFetchMode(PDO::FETCH_OBJ);

        return $query->fetch();
    }

    public function findAll() {
        $query = $pdo->query("SELECT * FROM $table");
        $query->setFetchMode(PDO::FETCH_OBJ);

        return $query->fetchAll();
    }

    public function save(string $request, array $item) {
        $query = $pdo->prepare($request);

        return $query->execute($item);
    }

    public function delete(int $id) {
        return $pdo->query("DELETE FROM $table WHERE id = $id");
    }
}
?>