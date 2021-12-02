<?php
require_once(__ROOT__.'/Core/DefaultController.php');
require_once(__ROOT__.'/Models/BookingModel.php');

class BookingController extends DefaultController
{
    /*public function __construct() {
        parent::__construct();
        $this->$table = 'booking';
    }

    public function add() {
        if (!$this->checkPost()) return false;

        $request = "INSERT INTO $table VALUES (?, ?, ?)";
        $this->save($request, $_POST);
    }

    public function update() {
        if (!$this->checkPost()) return false;

        $request = "UPDATE $table SET (user_id=?, nb_people=?, date_time=?)";
        $this->save($request, $_POST);
    }*/

    public function index() {
        $this->render("booking", [
            "booking" => (new BookingModel)->findAll()
        ]);
    }
}
?>
