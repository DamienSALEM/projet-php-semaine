<?php

require_once(__ROOT__.'/Controllers/BookingController.php');
require_once(__ROOT__.'/Controllers/CartController.php');
require_once(__ROOT__.'/Controllers/OrderController.php');
require_once(__ROOT__.'/Controllers/AdminController.php');
require_once(__ROOT__.'/Controllers/ProductController.php');
require_once(__ROOT__.'/Controllers/HomePageController.php');



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
        default:
            break;
     }
 }
 return (new HomePageController)->index();