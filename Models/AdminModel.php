<?php
require_once(__ROOT__.'/Core/DefaultModel.php');

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

    public function adminExist($data) {
        $username = $data['username'];
        $password = $data['password'];

        $query = $this->$pdo->query(
            "SELECT id
             FROM $table
             WHERE username = $username
             AND password = $password"
        );
        $result = $query->fetch();

        if ($result) return $result;
        return null;
    }
}
