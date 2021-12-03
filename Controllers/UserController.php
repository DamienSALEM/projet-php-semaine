<?php
require_once(__ROOT__.'/Core/DefaultController.php');
require_once(__ROOT__.'/Models/UserModel.php');

class UserController extends DefaultController
{
    public function index() {
        var_dump($_SESSION['user']->id);
        $this->render("profil", [
            "user" => (new UserModel)->find($_SESSION["user"]->id)
        ]);
    }

    public function login_page() {
        $this->render("login", []);
    }

    public function register_page() {
        $this->render("register", []);
    }

    public function login($data) {
        $id = (new UserModel)->userExist($data);
        if ($id) {
            $_SESSION["user"] = $id;
        }
        return false;
    }

    public function disconnect() {
        if ($_SESSION["user"]) {
            session_unset();
            header('Location: index.php');
        }
    }
}
