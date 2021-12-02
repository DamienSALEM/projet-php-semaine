<?php
require_once(__ROOT__.'/Database/DbConnection.php');

class ProductModel extends DbConnection
{
    protected $table = 'products';

    public function __construct() {
        parent::__construct();
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
