<?php
include_once'model/CustomerLoginRegistration.php';
include_once'model/CustomerValidation.php';
class LoginRegistrationController
{
    public function displayLoginRegistration()
    {
        include_once'view/LoginRegistration.php';
    }
    public function getRegisteredCustomer()
    {
        $email           = $_POST['email'];
        $email           = filter_var($email,FILTER_SANITIZE_EMAIL);
        $email           = filter_var($email,FILTER_VALIDATE_EMAIL);
        $password        = $_POST['password'];
        $companyName     = $_POST['company_name'];
        $firstName       = $_POST['first_name'];
        $lastName        = $_POST['last_name'];
        $phone           = $_POST['phone'];
        $phone           = filter_var($phone, FILTER_VALIDATE_INT);
        $confirmPassword = $_POST['confirmPassword'];

        if (empty($email) || empty($password) || empty($companyName) || empty($firstName) || empty($lastName) || empty($phone)) {
            header('location:http://local.exercise2.com/LoginRegistration');
        } elseif ($password != $confirmPassword) {
            echo 'Password did not match!';
        } else {
            $verify = $this->getUsernameValidation($email);
            if($verify == false) {
                $registerCustomer = new Customers();
                $result = $registerCustomer->registerCustomer($email, $password, $companyName, $firstName, $lastName, $phone);
                $this->getLoginCustomer();
            } else {
                echo'email is already exist!';
            }
        }
    }
    public function getLoginCustomer()
    {
        $email    = $_POST['email'];
        $password = $_POST['password'];
        if (empty($email) || empty($password)) {
            header('location://local.exercise2.com/LoginRegistration');
        } else {
            $loginCustomer = new Customers();
            $result = $loginCustomer->loginCustomer($email,$password);
            if($result == true){
                $_SESSION['customer_id'] = $result['customer_id'];
                $_SESSION['first_name']  = $result['first_name'];
                header('location:http://local.exercise2.com/');
            } else {
                echo'Account does not exist';
                header('location:http://local.exercise2.com/LoginRegistration');
            }
        }
    }
    public function getUsernameValidation($email)
    {
        $CustomerValidation = new CustomerValidation();
        $result = $CustomerValidation->validateUsername($email);
        return $result;
    }
}
?>