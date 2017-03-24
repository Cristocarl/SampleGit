<?php
namespace model;

class Products
{
    public function displayProductsToHomepage()
    {
        try {
            $sql = prepare("SELECT product_id,product_name,product_desc,product_thumbnail,stock_qty,price FROM products ");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            print_r($e);exit;
        }
    }

    public function displayProductDetails($product_id){
        try {
            $sql = prepare("SELECT product_id,product_name,product_desc,product_image,price,stock_qty
                                                          FROM products
                                                          WHERE product_id = '$product_id'
            ");
            $sql->execute();
            return $sql->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            print_r($e);exit;
        }
    }
}