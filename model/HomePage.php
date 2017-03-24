<?php
require_once'DatabaseConnection.php';

class HomeProducts
{
    private $Connection;
    public function __construct()
    {
        $this->Connection = new DatabaseConnection();
    }
    public function displayProductsToHomepage()
    {
        $sql = $this->Connection->connect()->prepare("SELECT * FROM products ");
        $sql->execute();
        return $sql->fetchAll();
    }
}