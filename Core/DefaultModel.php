<?php
require_once(__ROOT__.'/Database/DbConnection.php');

class DefaultModel extends DbConnection
{
    protected $table;

    public function __construct() {
        parent::__construct();
    }

    public function find(int $id) {
        $query = $this->pdo->query("SELECT * FROM $this->table WHERE id = $id");
        $query->setFetchMode(PDO::FETCH_OBJ);

        return $query->fetch();
    }

    public function findAll() {
        $query = $this->pdo->query("SELECT * FROM $this->table");
        $query->setFetchMode(PDO::FETCH_OBJ);

        return $query->fetchAll();
    }

    public function save(string $request, array $item) {
        $query = $this->pdo->prepare($request);
        //var_dump($query);
        //var_dump($item);

        return $query->execute($item);
    }

    public function delete(int $id) {
        return $this->pdo->query("DELETE FROM $this->table WHERE id = $id");
    }
}
?>
