<?php
require_once(__ROOT__.'/Controllers/BookingController.php');
require_once(__ROOT__.'/Controllers/CartController.php');
require_once(__ROOT__.'/Controllers/OrderController.php');
require_once(__ROOT__.'/Controllers/AdminController.php');
require_once(__ROOT__.'/Controllers/UserController.php');
require_once(__ROOT__.'/Controllers/ProductController.php');
require_once(__ROOT__.'/Controllers/HomePageController.php');
require_once(__ROOT__.'/Models/BookingModel.php');

if (isset($_GET["page"]) && !empty($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'products':
            (new ProductController)->index();
            break;
        case 'booking':
            (new BookingController)->index();
             break;
        case 'order':
            (new OrderController)->index();
            break;
        case 'cart':
            (new CartController)->index();
        case 'admin':
            (new AdminController)->index();
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
    return (new HomePageController)->index();
}

if (isset($_GET['user']) && !empty($_POST['user'])) {
    if (isset($_POST['add-booking']) && !empty($_POST['add-booking'])) {
        (new BookingModel)->add(array($_GET['user'], $_POST['date'], $_POST['nb-people']));
    }
}
