<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'../Core/DefaultModel.php');

class AdminModel extends DefaultModel
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'admins';
    }

    public function add() {
        if (!$this->checkPost()) return false;

        $request = "INSERT INTO $table VALUES (?, ?)";
        $this->save($request, $_POST);
    }

    public function update() {
        if (!$this->checkPost()) return false;

        $request = "UPDATE $table SET (username=?, password=?)";
        $this->save($request, $_POST);
    }

    public function login($username, $password) {
        if (!$this->checkPost()) return false;

        $query = $this->$pdo->query(
            "SELECT COUNT(*)
             FROM $table
             WHERE username = $username
             AND password = $password"
        );
        $result = $query->fetch();

        if ($result > 0) return true;
        return false;
    }
}
