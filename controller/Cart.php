<?php

namespace controller\Cart;

use model\DatabaseConnection as DbConnect;
use model\Cart as Cart;
//include_once 'model/DatabaseConnection';

class Cart
{
    private $Connection;
    public function getDisplayCartItems($product_id)
    {
//      var_dump($product_id);exit;
        $DbConnection = new DbConnect();
        $CartItems = new Cart();
        $Result = $DbConnection->connect()->$CartItems->displaySelectedItems($product_id);
        include_once 'view/Cart.php';
      /*  if($Result == $product_id){

        } else {
            header('location:http://local.exercise2.com/');
        }*/
//      echo '<pre>';print_r($Result);exit;

    }
}