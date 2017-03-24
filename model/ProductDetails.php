<?php
include_once'DatabaseConnection.php';
class ProductDetails
{
    private $Connection;
    public function __construct()
    {
        $this->Connection = new DatabaseConnection();
    }
    public function displayProductDetails($product_id){
        $sql = $this->Connection->connect()->prepare("SELECT * FROM products WHERE product_id = '$product_id'");
        $sql->execute();
        return $sql->fetch();
    }
}