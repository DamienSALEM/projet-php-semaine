<?php
require_once(__ROOT__.'/Core/DefaultController.php');
require_once(__ROOT__.'/Models/ProductModel.php');
require_once(__ROOT__.'/Models/BookingModel.php');
require_once(__ROOT__.'/Models/AdminModel.php');
require_once(__ROOT__.'/Models/OrderModel.php');

class AdminController extends DefaultController
{
    public function index() {
        $this->render("admin", [
            "products" => (new ProductModel)->findAll(),
            "booking" => (new BookingModel)->findAll()
           // "orders" => (new OrderModel)->findAll()
        ]);
    }   

    public function login($data) {
        $id = (new AdminModel)->adminExist($data);
        if (!id) {
            session_start();
            $_SESSION["admin"] = $id;
            $this->redirectToRoute(__ROOT__.'?page=admin');
            echo"done!";
        }
        return false;
    }
}
