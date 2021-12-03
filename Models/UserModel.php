<?php
require_once(__ROOT__.'/Core/DefaultModel.php');
require_once(__ROOT__.'/Database/DbConnection.php');

class UserModel extends DefaultModel
{
    public function __construct() {
        parent::__construct();
        $this->table = 'users';
    }

    public function add($data) {
        $request = "INSERT INTO $this->table (firstname, lastname, email_address, password) VALUES (?, ?, ?, ?)";
        $this->save($request, $data);
    }

    public function update($data) {
        $request = "UPDATE $this->table SET (firstname=?, lastname=?, email_address=?, password=?)";
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
