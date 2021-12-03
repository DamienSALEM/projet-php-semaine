<?php
require_once(__ROOT__.'/Core/DefaultController.php');

class PaymentController extends DefaultController
{
    public function index() {
        $this->render("payment", []);
    }
}
?>
