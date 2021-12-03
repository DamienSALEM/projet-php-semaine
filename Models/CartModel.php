<?php
require_once(__ROOT__.'/Core/DefaultModel.php');

class CartModel extends DefaultModel
{

    protected $table = 'cart';

    public function __construct() {
        parent::__construct();
    }

    public function add($data) {
        $request = "INSERT INTO $table (user_id, product_id) VALUES (?, ?)";
        $this->save($request, $data);
    }

    public function update($data) {
        $request = "UPDATE $table SET (user_id=?, product_id=?)";
        $this->save($request, $data);
    }
}
?>
