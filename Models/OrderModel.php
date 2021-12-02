<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'../Database/connectToBDD.php');

class OrdersModel extends DbConnection
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'orders';
    }

    public function add($data) {
        $request = "INSERT INTO $table VALUES (?, ?)";
        $this->save($request, $_POST);
    }

    public function update($data) {
        $request = "UPDATE $table SET (date=?, state=?)";
        $this->save($request, $_POST);
    }
}
?>
