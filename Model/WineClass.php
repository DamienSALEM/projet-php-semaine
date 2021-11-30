<?php

class Wine {

    public function __construct() {

        $this->pdo = (new Database)->getPDO();
    }

    public function getWines() {

        $query = $this->pdo->query("SELECT * FROM product");
        $query->setFetchMode(\PDO::FETCH_OBJ);
        $wines = $query->fetchAll();
    }

    public function getWine() {

        $query = $this->pdo->query("SELECT * FROM product");
        $query->setFetchMode(\PDO::FETCH_OBJ);
        $user = $query->fetchAll();
    }

    public function addWine(string $name, int $category_id, string $brand, string $origin, int $price, boolean $promotion, string $image, int $inMenu) {

        if(!empty($name) && !empty($category_id) && !empty($brand) && !empty($origin) && !empty($price) && !empty($promotion) && !empty($image) && !empty($inMenu)) {
            $prepare = $this->pdo->prepare("INSERT INTO product VALUES (null, $name, $category_id, $brand, $origin, $promotion, $image, $inMenu)");
            $prepare->execute($user);
        }
    }

}

?>