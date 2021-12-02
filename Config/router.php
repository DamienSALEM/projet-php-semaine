<?php

require_once(__ROOT__.'/Controllers/BookingController.php');

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
        
         default:
             // Ajouter la route par defaut
             break;
     }
 }