<?php
require_once(__ROOT__.'/Core/DefaultController.php');
require_once(__ROOT__.'/Models/ProductModel.php');

class ProductController extends DefaultController
{
    public function index() {
        $this->render("products", [
            "products" => (new ProductModel)->findAll()
        ]);
    }
}
?>
