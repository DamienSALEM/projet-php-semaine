<?php
require_once(__ROOT__.'/Core/DefaultModel.php');

class OrdersModel extends DefaultModel
{
    protected $table;
    public function __construct() {
        parent::__construct();
        $this->table = 'orders';
    }

    public function add($data) {
        $request = "INSERT INTO $this->table VALUES (?, ?)";
        $this->save($request, $_POST);
    }

    public function update($data) {
        $request = "UPDATE $this->table SET (date=?, state=?)";
        $this->save($request, $_POST);
    }
    public function orderDetails($id){
        $request="SELECT * FROM orders INNER JOIN order_products ON orders.id=order_products.order_id
        INNER JOIN products ON order_products.product_id=products.id where orders.id=$id";
        $query=$this->pdo->query($request);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        return $query->fetch();
    }
}
?>
