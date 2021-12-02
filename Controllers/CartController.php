<?php
require_once(__ROOT__.'/Core/DefaultController.php');
require_once(__ROOT__.'/Models/CartModel.php');

class CartController extends DefaultController
{
    public function index() {
        $this->render("cart", [
            "cart" => (new CartModel)->findAll()
        ]);
    }
}
?>
