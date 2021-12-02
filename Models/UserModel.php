<?php
require_once(__ROOT__.'/Core/DefaultModel.php');

class UserModel extends DefaultModel
{
    public function __construct() {
        parent::__construct();
        $this->$table = 'users';
    }

    public function add($data) {
        if (!$this->checkPost()) return false;

        $request = "INSERT INTO $table VALUES (?, ?, ?, ?)";
        $this->save($request, $data);
    }

    public function update($data) {
        if (!$this->checkPost()) return false;

        $request = "UPDATE $table SET (firstname=?, lastname=?, email_address=?, password=?)";
        $this->save($request, $data);
    }

    public function userExist($username, $password) {
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
?>
