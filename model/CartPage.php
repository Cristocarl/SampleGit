<?php
include_once'DatabaseConnection.php';

class Cart
{
    protected $Connection;
    public function __construct()
    {
        $this->Connection = new DatabaseConnection();
    }
    public function displaySelectedItems($product_id)
    {
        $sql = $this->Connection->connect()->prepare("SELECT * FROM cart_items JOIN products ON cart_items.product_id=products.product_id JOIN carts ON carts.cart_id=cart_items.cart_id");
        $sql->execute();
        return $sql->fetch();
    }
}