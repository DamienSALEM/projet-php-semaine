<?php
require_once(__ROOT__.'/Controllers/BookingController.php');
require_once(__ROOT__.'/Controllers/CartController.php');
require_once(__ROOT__.'/Controllers/OrdersController.php');
require_once(__ROOT__.'/Controllers/AdminController.php');
require_once(__ROOT__.'/Controllers/UserController.php');
require_once(__ROOT__.'/Controllers/ProductController.php');
require_once(__ROOT__.'/Controllers/HomePageController.php');
require_once(__ROOT__.'/Controllers/PaymentController.php');
require_once(__ROOT__.'/Controllers/ContactController.php');
require_once(__ROOT__.'/Models/BookingModel.php');


// Routes
if (isset($_GET["page"]) && !empty($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'contact':
            (new ContactController)->index();
            break;
        case 'payment': 
            (new PaymentController)->index();
            break;
        case 'products':
            (new ProductController)->index();
            break;
        case 'booking':
            if (isset($_SESSION['user']))
                (new BookingController)->index();
            else
                header('Location: ?page=login');
             break;
        case 'order':
            (new OrdersController)->index();
            break;
        case 'cart':
            if (isset($_SESSION['user']))
                (new CartController)->index();
            else
                header('Location: ?page=login');
            break;
        case 'admin':
            (new AdminController)->index();
            break;
        case 'homepage':
            (new HomePageController)->index();
            break;
        case 'profil':
            if (isset($_SESSION['user']))
                (new UserController)->index();
            else
                header('Location: ?page=login');
        case 'login':
            if (isset($_SESSION['user']))
                header('Location: index.php');
            else
                (new UserController)->login_page();
            break;
        case 'register':
            (new UserController)->register_page();
            break;
        case 'disconnect':
            if (isset($_SESSION['user']) && !empty($_SESSION['user']))
                (new UserController)->disconnect();
            break;
        default:
            break;
    }
} else {
    (new HomePageController)->index();
}

// API endpoints
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    if (isset($_POST['add-booking']) && !empty($_POST['add-booking'])) {
        if(!empty($_POST['date'])){
            (new BookingModel)->add(array($_SESSION['user']->id, $_POST['nb-people'], $_POST['date']));
            echo"
            <div>
                <p class=\"rep-reservation\">Votre r??servation a ??t?? enregistr??e.</p>
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
}

if (!isset($_SESSION['user'])) {
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


//if (isset($_POST['add-booking']) && !empty($_POST['add-booking'])) {
 //   (new BookingModel)->add(array($_SESSION['user'], $_POST['nb-people'], $_POST['date']));
//}
