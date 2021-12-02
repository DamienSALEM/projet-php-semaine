<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'../Core/DefaultModel.php');

class AdminModel extends DefaultModel
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'booking';
    }

    public function add($data) {
        $request = "INSERT INTO $table VALUES (?, ?, ?)";
        $this->save($request, $data);
    }

    public function update($data) {
        $request = "UPDATE $table SET (user_id=?, nb_people=?, date_time=?)";
        $this->save($request, $data);
    }
}
?>
