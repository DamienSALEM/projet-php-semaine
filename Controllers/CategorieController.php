<?php

class CategorieModel extends DbConnection
{
    public function index() {
        $this->render("", [
            "booking" => (new BookingModel)->findAll()
        ]);
    }
}
?>
