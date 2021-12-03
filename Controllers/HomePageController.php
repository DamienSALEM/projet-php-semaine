<?php
require_once(__ROOT__.'/Core/DefaultController.php');
require_once(__ROOT__.'/Models/HomePageModel.php');

class HomePageController extends DefaultController
{

    public function index() {
        $this->render("homepage", [
            "homepage" => (new HomePageModel)->findAll()
        ]);
    }
}
?>
