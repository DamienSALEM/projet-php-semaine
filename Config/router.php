<style>
    <?php include(__ROOT__.'/public/css/reservation.css') ?>
</style>
<?php
require_once(__ROOT__.'/Controllers/BookingController.php');
require_once(__ROOT__.'/Controllers/CartController.php');
require_once(__ROOT__.'/Controllers/OrdersController.php');
require_once(__ROOT__.'/Controllers/AdminController.php');
require_once(__ROOT__.'/Controllers/UserController.php');
require_once(__ROOT__.'/Controllers/ProductController.php');
require_once(__ROOT__.'/Controllers/HomePageController.php');
require_once(__ROOT__.'/Models/BookingModel.php');
require_once(__ROOT__.'/Controllers/LoginAdminController.php');

// Routes
if (isset($_GET["page"]) && !empty($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'products':
            (new ProductController)->index();
            break;
        case 'booking':
            (new BookingController)->index();
             break;
        case 'order':
            (new OrdersController)->index();
            break;
        case 'cart':
            (new CartController)->index();
            break;
        case 'admin':
            (new AdminController)->index();
            break;
        case 'loginadmin':
            (new LoginAdminController)->index();
            break;
        case 'homepage':
            (new HomePageController)->index();
            break;
        case 'login':
            (new UserController)->login_page();
            break;
        case 'register':
            (new UserController)->register_page();
            break;
        default:
            break;
    }
} else {
    (new HomePageController)->index();
}

// API endpoints

if (!isset($_GET['user'])) {
    if (isset($_POST['register']) && !empty($_POST['register'])) {
        (new UserModel)->add(array($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']));
    }
    if (isset($_POST['login']) && !empty($_POST['login'])) {
        (new UserController)->login($_POST);
    }
}
if (isset($_POST['usernameAdmin']) && !empty($_POST['usernameAdmin'])) {
    (new AdminController)->login($_POST);
}
//if (isset($_GET['user']) && !empty($_POST['user'])) {
    if (isset($_POST['add-booking']) && !empty($_POST['add-booking'])) {
        if(!empty($_POST['date'])){
            (new BookingModel)->add(array(3, $_POST['nb-people'], $_POST['date'])); 
            echo"
            <div>
                <p class=\"rep-reservation\">Votre réservation a été enregistrée.</p>
                <p class=\"rep-reservation\">Nous vous attendons avec impatience ! </p>
            </div>
            ";
        }
        else {
            echo"
            <div>
                <p class=\"error-reservation\">Une erreur c'est produite, recommencer !</p>
            </div>";
        }
    }
//}
