<?php
include_once 'model/CartPage.php';
class CartController
{
    public function getDisplayCartItems()
    {
        $CartItems = new Cart();
        $Result = $CartItems->displaySelectedItems();
        echo '<pre>';print_r($Result);exit;
        include_once 'view/Cart.php';
    }
}