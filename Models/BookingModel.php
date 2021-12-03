<?php
require_once(__ROOT__.'/Core/DefaultModel.php');

class BookingModel extends DefaultModel
{
    protected $table = 'booking';

    public function __construct() {
        parent::__construct();
    }

    public function add($data) {
        $request = "INSERT INTO $this->table (user_id, nb_people, date_time) VALUES (?, ?, ?)";
        $this->save($request, $data);
    }

    public function update($data) {
        $request = "UPDATE $this->table SET (user_id=?, nb_people=?, date_time=?)";
        $this->save($request, $data);
    }
}
?>
