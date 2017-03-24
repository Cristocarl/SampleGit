<?php
include_once'model/HomePage.php';
class HomeController
{
    public function displayProducts()
    {
        $display = new HomeProducts();
        $Result  = $display->displayProductsToHomepage();
        include_once'view/HomePage.php';
    }
}