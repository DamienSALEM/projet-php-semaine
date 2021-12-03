<?php
require_once(__ROOT__.'/Core/DefaultModel.php');

class OrdersModel extends DefaultModel
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'orders';
    }

    public function add($data) {
        $request = "INSERT INTO table  (date, state) VALUES (?, ?)";
        $this->save($request, $_POST);
    }

    public function update($data) {
        $request = "UPDATE $table SET (date=?, state=?)";
        $this->save($request, $_POST);
    }
}
?>
