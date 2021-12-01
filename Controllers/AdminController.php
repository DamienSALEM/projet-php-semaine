<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'../Core/DefaultController.php');

class AdminController extends DefaultController
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

    public function login() {
        if (!$this->checkGet()) return false;

        $query = $this->$pdo->query(
            "SELECT COUNT(*)
             FROM $table
             WHERE username = $_POST['username']
             AND password = $_POST['password']"
        );
        $result = $query->fetch();

        if ($result > 0) return true;
        return false;
    }
}
