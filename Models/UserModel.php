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

    public function userExist($data) {
        $email_address = $data['email'];
        $password = $data['password'];
        $query = $this->pdo->query(
           "SELECT id
            FROM $this->table
            WHERE email_address = '$email_address' AND password = '$password' "
        );
        $query->setFetchMode(PDO::FETCH_OBJ);
        $result = $query->fetch();

        if ($result) {
            return $result;
        }
        return false;
    }
}
?>
