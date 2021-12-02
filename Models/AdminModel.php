<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'../Core/DefaultModel.php');

class AdminModel extends DefaultModel
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'admins';
    }

    public function add($data) {
        $request = "INSERT INTO $table VALUES (?, ?)";
        $this->save($request, $data);
    }

    public function update($data) {
        $request = "UPDATE $table SET (username=?, password=?)";
        $this->save($request, $data);
    }

    public function login($data) {
        $username = $data['username'];
        $password = $data['password'];

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
