<?php
require_once(__ROOT__.'/Database/connectToBDD.php');

class ProductModel extends DbConnection
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'categories';
    }

    public function add() {
        if (!$this->checkPost()) return false;

        $request = "INSERT INTO $table VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->save($request, $_POST);
    }

    public function update() {
        if (!$this->checkPost()) return false;

        $request = "UPDATE $table SET (name=?, category_id=?, brand=?, origin_country=?, stock=?, price=?, promotion=?, image=?, is_in_menu=?)";
        $this->save($request, $_POST);
    }
}
?>
