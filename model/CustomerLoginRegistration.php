<?php
include_once'DatabaseConnection.php';

class Customers
{
    protected $Connection;
    public function __construct()
    {
        $this->Connection = new DatabaseConnection();
    }
    public function registerCustomer($email, $password, $company_name, $first_name, $last_name,$phone)
    {
        $sql  = $this->Connection->connect()->prepare("INSERT INTO customers(email, password, company_name, first_name, last_name, phone )VALUES(?,?,?,?,?,?)");
        $data = array($email, $password, $company_name, $first_name, $last_name,$phone);
        return $sql->execute($data);
    }
    public function loginCustomer($email,$password)
    {
        $sql = $this->Connection->connect()->prepare("SELECT * FROM customers WHERE email='$email' AND password='$password'");
        $sql->execute();
        return $sql->fetch();
    }
}