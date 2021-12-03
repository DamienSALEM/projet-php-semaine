<?php
require_once(__ROOT__.'/Core/DefaultModel.php');

class AdminModel extends DefaultModel
{

    protected $table = 'admins';

    public function __construct() {
        parent::__construct();
    }

    public function add($data) {
        $request = "INSERT INTO $table (username, password) VALUES (?, ?)";
        $this->save($request, $data);
    }

    public function update($data) {
        $request = "UPDATE $table SET (username=?, password=?)";
        $this->save($request, $data);
    }

    public function adminExist($data) {
        $username = $data['usernameAdmin'];
        $password = $data['passwordAdmin'];

        $query = $this->pdo->query(
            "SELECT id
             FROM $this->table
             WHERE username = $username
             AND password = $password"
        );
        $result = $query->fetch();

        if ($result) return $result;
        return null;
    }
}
