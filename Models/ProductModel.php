<?php
require_once(__ROOT__.'/Database/connectToBDD.php');

class ProductModel extends DbConnection
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'categories';
    }

    public function add($data) {
        $request = "INSERT INTO $table VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->save($request, $data);
    }

    public function update($data) {
        $request = "UPDATE $table SET (name=?, category_id=?, brand=?, origin_country=?, stock=?, price=?, promotion=?, image=?, is_in_menu=?)";
        $this->save($request, $data);
    }
}
?>
