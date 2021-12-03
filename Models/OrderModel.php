<?php
require_once(__ROOT__.'/Core/DefaultModel.php');

class OrderModel extends DefaultModel
{
    public function __construct() {
        parent::__construct();
        $this->table = 'orders';
    }

    public function add($data) {
        $request = "INSERT INTO $this->table (date, state) VALUES (?, ?)";
        $this->save($request, $_POST);
    }

    public function update($data) {
        $request = "UPDATE $this->table SET (date=?, state=?)";
        $this->save($request, $_POST);
    }
}
?>
