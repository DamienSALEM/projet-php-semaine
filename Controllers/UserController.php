<?php
require_once(__ROOT__.'/Core/DefaultController.php');
require_once(__ROOT__.'/Models/UserModel.php');

class UserController extends DefaultController
{
    public function index() {
        $this->render("Profil/index", [
            "user" => (new UserModel)->find($_SESSION["user"])
        ]);
    }

    public function login($data) {
        $id = (new UserModel)->userExist($data);
        if (!$id) {
            session_start();
            $_SESSION["user"] = $id;
        }
        return false;
    }

    public function disconnect() {
        if ($_SESSION["user"]) session_destroy();
    }
}
