<?php
require_once(__ROOT__.'/Core/DefaultController.php');

class OrderController extends DefaultController
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'orders';
    }

    public function add() {
        if (!$this->checkPost()) return false;

        $request = "INSERT INTO $table VALUES (?, ?)";
        $this->save($request, $_POST);
    }

    public function update() {
        if (!$this->checkPost()) return false;

        $request = "UPDATE $table SET (date=?, state=?)";
        $this->save($request, $_POST);
    }
}
?>
