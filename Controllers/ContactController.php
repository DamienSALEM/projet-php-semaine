<?php
require_once(__ROOT__.'/Core/DefaultController.php');

class ContactController extends DefaultController
{
    public function index() {
        $this->render("contact", []);
    }
}
?>
