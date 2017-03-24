<?php
require_once('controller/HomeController.php');
require_once('controller/LoginRegistrationController.php');
require_once('controller/ProductController.php');
require_once('controller/CartController.php');
session_start();

$url = explode('/',$_SERVER['REQUEST_URI']);
switch ($url[1]) {
    case '' :
        $HomeController = new HomeController();
        $HomeController->displayProducts();
        break;
    case 'ProductDetails':
        $ProductController = new ProductController();
        $ProductController->display_product($url[2]);
        break;
    case 'Cart':
        $CartController = new CartController();
        $CartController->getDisplayCartItems();
        break;
    case 'LoginRegistration':
        $LoginRegistrationController = new LoginRegistrationController();
        $LoginRegistrationController->displayLoginRegistration();
        break;
    case 'RegisterCustomer':
        $LoginRegistrationController = new LoginRegistrationController();
        $LoginRegistrationController->getRegisteredCustomer();
        break;
    case 'LoginCustomer':
        $LoginRegistrationController = new LoginRegistrationController();
        $LoginRegistrationController->getLoginCustomer();
        break;
    case 'Logout':
        unset($_SESSION);
        session_destroy();
        session_write_close();
        header('location:http://local.exercise2.com/');
        break;
    default: header('location:location:http://local.exercise2.com/');
}
?>
