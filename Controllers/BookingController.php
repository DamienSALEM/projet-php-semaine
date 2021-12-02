<?php
require_once(__ROOT__.'/Core/DefaultController.php');
require_once(__ROOT__.'/Models/BookingModel.php');

class BookingController extends DefaultController
{
    public function index() {
        $this->render("booking", [
            "booking" => (new BookingModel)->findAll()
        ]);
    }
}
?>
