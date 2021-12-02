<?php
require_once(__ROOT__.'/Database/connectToBDD.php');

class CategorieModel extends DbConnection
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'categories';
    }

    public function add($data) {
        $request = "INSERT INTO $table VALUES (?)";
        $this->save($request, $_POST);
    }

    public function update($data) {
        $request = "UPDATE $table SET (name=?)";
        $this->save($request, $_POST);
    }
}
?>
