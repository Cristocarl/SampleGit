<?php
include_once'DatabaseConnection.php';

class CustomerValidation
{
    private $Connection;
    public function __construct()
    {
        $this->Connection = new DatabaseConnection();
    }
    public  function  validateUsername($email)
    {
        $sql = $this->Connection->connect()->prepare("SELECT * FROM customers WHERE email='$email'");
        $sql->execute();
        return $sql->fetchAll();
    }
}